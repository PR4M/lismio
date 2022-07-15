<?php

use Goutte\Client;
use App\Enums\ItemType;
use App\Spiders\Audible;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for testing for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/browse', function () {
    return view('temp.browse');
});

Route::get('/view', function () {
    return view('layout.content');
});


Route::get('read-enum', function () {
    dd(ItemType::SCRAPE->value);
});

Route::prefix('/extract')->group(function () {

    Route::get('symfony-blog', function () {
        $client = new Client();

        // Go to the symfony.com website
        $crawler = $client->request('GET', 'https://www.symfony.com/blog/');

        $crawler->filter('h2 > a')->each(function ($node) {
            print $node->text()."<br>";
        });
    });

    // tested, items extracted
    Route::get('audible', function () {
        $client = new Client();

        // Go to the symfony.com website
        $crawler = $client->request('GET', 'https://www.audible.com/newreleases');

        $crawler->filter('li > h3 > a')->each(function ($node) {
            print $node->text()."<br>";
        });
    });

    Route::get('audible-item', function () {

        $u1 = 'https://www.audible.com/pd/The-Comeback-Audiobook/B09TV414Q8';
        $u2 = 'https://www.audible.com/pd/An-Immigrants-Love-Letter-to-the-West-Audiobook/B09WBWPR6T';
        $u3 = 'https://www.audible.com/pd/The-Weight-of-Command-Audiobook/B0B193J92Q';
        $u4 = 'https://www.audible.com/pd/Influence-Empire-Audiobook/B09VLN4LDG';

        $spider = new Audible($u4);

        //$result = $spider->crawler->filterXPath('//*[@id="center-1"]/div/div[3]/div/div/div/div[1]/div/div[1]/img')->attr('src');
        //$result = $spider->imageOriginUrl();

        // dd ($result);

        dd ($spider->details());
    });

    // tested without User Agent, extracted item title and url
    // tested with User Agent, extracted item title and url
    Route::get('audiobookscom', function () {
        $client = new Client();

        // Go to the symfony.com website
        $crawler = $client->request('GET', 'https://www.audiobooks.com/browse/page/1/listType/list');

        $crawler->filter('div > a > h5')->each(function ($node) {
            print $node->text()."<br>";
        });
    });

    // tested, but loader html is the only thing stop the crawler
    Route::get('hoopla', function () {
        $client = new Client(HttpClient::create(array(
            'headers' => array(
                'user-agent' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:73.0) Gecko/20100101 Firefox/73.0', // will be forced using 'Symfony BrowserKit' in executing
                'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
                'Accept-Language' => 'en-US,en;q=0.5',
                'Referer' => 'https://google.co.id/',
                'Upgrade-Insecure-Requests' => '1',
                'Save-Data' => 'on',
                'Pragma' => 'no-cache',
                'Cache-Control' => 'no-cache',
            ),
        )));
        $client->setServerParameter('HTTP_USER_AGENT', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:73.0) Gecko/20100101 Firefox/73.0');

        // Go to the symfony.com website
        $crawler = $client->request('GET', 'https://www.hoopladigital.com/collection/-108?sort=DISPLAY_DATE&page=1&kindId=8');

        dd ($crawler);

        // $crawler->filter('a > div > div > p')->each(function ($node) {
        //     print $node->text()."<br>";
        // });
    });

    // 1. tested without User Agent, timeout reached
    // 2. tested with User Agent, extracted item title and url
    Route::get('kobo', function () {
        $client = new Client(HttpClient::create(array(
            'headers' => array(
                'user-agent' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:73.0) Gecko/20100101 Firefox/73.0', // will be forced using 'Symfony BrowserKit' in executing
                'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
                'Accept-Language' => 'en-US,en;q=0.5',
                'Referer' => 'https://google.co.id/',
                'Upgrade-Insecure-Requests' => '1',
                'Save-Data' => 'on',
                'Pragma' => 'no-cache',
                'Cache-Control' => 'no-cache',
            ),
        )));
        $client->setServerParameter('HTTP_USER_AGENT', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:73.0) Gecko/20100101 Firefox/73.0');

        // Go to the symfony.com website
        $crawler = $client->request('GET', 'https://www.kobo.com/ww/en/search?query=&fcmedia=Audiobook');

        $collection = array();

        // Get each title and url of the extracted item
        $crawler->filter('li > div > div > h2 > a')
            ->each(function (Crawler $node, $i) use (&$collection) {

                $collection[$i] = [
                    'title' => $node->text(),
                    'link' => $node->attr('href')
                ];

                print $i . ". " . $node->text();
                print ": ";
                print $node->attr('href');
                print "<br><br>";
        });
    });

});

Route::prefix('playground')->group( function () {

    Route::get('audible-spider', function () {

        $notDuplicated  = [];
        $totalDuplicate = [];

        $spider = new Audible('https://www.audible.com/newreleases');

        $spider->items()->each(function($item, $i) use (&$totalDuplicate, &$notDuplicated) {

            // Save item to "items" table if it's not existing yet
            // A new dispatch job for each item is automatically created
            // through \App\Model\Item event listener inside the model

            // print $i . " | " . $item['title'] . "<br>";

            // print $i;

            if (DB::table('items')
                    ->where('title', $item['title'])
                    ->where('platform', 'audible')
                    ->doesntExist()) {

                    // $notDuplicated = $notDuplicated + 1;
                    $notDuplicated[$i] = $item['title'];

                    // ...
            } else {
                // increase value on $totalDuplicate variable
                // $totalDuplicate = $totalDuplicate + 1;
                $totalDuplicate[$i] = $item['title'];
            }

            // if $totalDuplicate == 10
            // exit this loop extraction
            if ($totalDuplicate == 10) {
                exit;
            }

            // if $i equal to latest index (reached latest loop)
            // visit page with pageNumber - 1
            // Update Redis KV


        })->last(function () {
            print ("x");
        });

        //dd ($notDuplicated, $totalDuplicate);

    });

    Route::get('audible-detail-spider', function () {

        $client = new Client(HttpClient::create(array(
            'headers' => array(
                'user-agent' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:73.0) Gecko/20100101 Firefox/73.0', // will be forced using 'Symfony BrowserKit' in executing
                'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
                'Accept-Language' => 'en-US,en;q=0.5',
                'Referer' => 'https://google.co.id/',
                'Upgrade-Insecure-Requests' => '1',
                'Save-Data' => 'on',
                'Pragma' => 'no-cache',
                'Cache-Control' => 'no-cache',
            ),
        )));
        $client->setServerParameter('HTTP_USER_AGENT', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:73.0) Gecko/20100101 Firefox/73.0');

        // Go to the symfony.com website

        //$url_one_author = 'https://www.audible.com/pd/The-Comeback-Audiobook/B09TV414Q8';
        //$url_two_authors = 'https://www.audible.com/pd/Tomorrow-and-Tomorrow-and-Tomorrow-Audiobook/B09LHWT2K3';
        $url_preview = 'https://www.audible.com/pd/An-Immigrants-Love-Letter-to-the-West-Audiobook/B09WBWPR6T';

        $crawler = $client->request('GET', $url_preview);

        $preview_result = $crawler->filterXPath('//html/body/div[1]/div[8]/div[2]/div/div[3]/div/div/div/div[1]/div/div[2]/div/span/button')->attr('data-mp3');
        dd($preview_result);

        //dd($crawler);

        //$result = $crawler->filterXPath('//*[@id="center-9"]/div/div/div/div')->each(function (Crawler $node, $i) {
        //    echo $i . " " . $node->text() . ',';
        // });
        // $result = $crawler->filter("#center-1 > div > div.hero-content.bc-pub-clearfix.bc-container > div > div > div > div.bc-col-responsive.bc-col-5 > span > ul > li.bc-list-item.narratorLabel")->text();

        //$formatted = Str::of($result)->after('by: ')->explode(',');

        //dd($formatted);

        //dd($result);

        //$tag = $crawler->filterXPath('//body/*')->nodeName();
        //dd($tag);
    });

    Route::get('audible-different-differents', function () {

        $client = new Client(HttpClient::create(array(
            'headers' => array(
                'user-agent' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:73.0) Gecko/20100101 Firefox/73.0', // will be forced using 'Symfony BrowserKit' in executing
                'Accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
                'Accept-Language' => 'en-US,en;q=0.5',
                'Referer' => 'https://google.co.id/',
                'Upgrade-Insecure-Requests' => '1',
                'Save-Data' => 'on',
                'Pragma' => 'no-cache',
                'Cache-Control' => 'no-cache',
            ),
        )));
        $client->setServerParameter('HTTP_USER_AGENT', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:73.0) Gecko/20100101 Firefox/73.0');

        // The Comeback
        $url_1 = 'https://www.audible.com/pd/The-Comeback-Audiobook/B09TV414Q8';
        $path_summary_1 = '//*[@id="center-3"]/div/div/div[1]';
        $preview_url = '//html/body/div[1]/div[8]/div[2]/div/div[3]/div/div/div/div[1]/div/div[2]/div/span/button';

        // An Imigrant Love Letter's to the West
        $url_2 = 'https://www.audible.com/pd/An-Immigrants-Love-Letter-to-the-West-Audiobook/B09WBWPR6T';
        $path_summary_2 = '//*[@id="center-8"]/div/div/div[1]';
        $preview_2 = '//html/body/div[1]/div[8]/div[2]/div/div[3]/div/div/div/div[1]/div/div[2]/div/span/button';

        // The Weight of The Command
        $url_3 = 'https://www.audible.com/pd/The-Weight-of-Command-Audiobook/B0B193J92Q';
        $path_summary_3 = '//*[@id="center-3"]/div/div/div[1]';
        $preview_3 = '//html/body/div[1]/div[8]/div[2]/div/div[3]/div/div/div/div[1]/div/div[2]/div/span/button';

        // Influence Empire
        $url_4 = 'https://www.audible.com/pd/Influence-Empire-Audiobook/B09VLN4LDG';
        $path_summary_4 = '//*[@id="center-8"]/div/div/div[1]';
        $preview_4 = '//html/body/div[1]/div[8]/div[2]/div/div[3]/div/div/div/div[1]/div/div[2]/div/span/button';

        $crawler = $client->request('GET', $url_1);

        $preview_result = $crawler->filterXPath('')->attr('data-mp3');
        dd($preview_result);
    });

});



Route::get('check-two-strings', function () {
    $lower  = strtolower("Black Tie Villainy");
    $origin = "Black Tie Villainy";

    dd( $lower == $origin, $lower === $origin );
});


Route::get('insert-loop-array', function () {

    $arr = ['apple', 'durian', 'jeruk'];

    $newarr = [];

    foreach ($arr as $r) {
        $newarr[] = $r;
    }

    dd($newarr);

});

Route::get('str-cut-text', function () {
    $string = "Narrated by: Jennifer Kim, Julian Cihi";

    $formatted = Str::of($string)->after('by: ')->explode(',');

    dd($formatted);
});
