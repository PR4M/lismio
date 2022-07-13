<?php

use Goutte\Client;
use App\Enums\ItemType;
use Illuminate\Support\Facades\Route;
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

Route::get('read-enum', function () {
    dd(ItemType::SCRAPE->value);
});

Route::get('extract-symfony-blog-items', function () {
    $client = new Client();

    // Go to the symfony.com website
    $crawler = $client->request('GET', 'https://www.symfony.com/blog/');

    $crawler->filter('h2 > a')->each(function ($node) {
        print $node->text()."<br>";
    });
});

// tested, items extracted
Route::get('extract-audible-items', function () {
    $client = new Client();

    // Go to the symfony.com website
    $crawler = $client->request('GET', 'https://www.audible.com/newreleases');

    $crawler->filter('li > h3 > a')->each(function ($node) {
        print $node->text()."<br>";
    });
});

// tested without User Agent, extracted item title and url
// tested with User Agent, extracted item title and url
Route::get('extract-audiobookscom-items', function () {
    $client = new Client();

    // Go to the symfony.com website
    $crawler = $client->request('GET', 'https://www.audiobooks.com/browse/page/1/listType/list');

    $crawler->filter('div > a > h5')->each(function ($node) {
        print $node->text()."<br>";
    });
});

// tested, but loader html is the only thing stop the crawler
Route::get('extract-hoopla-items', function () {
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
Route::get('extract-kobo-items', function () {
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

    // Get each title and url of the extracted item
    $crawler->filter('li > div > div > h2 > a')->each(function ($node) {
        print $node->text();
        print ": ";
        print $node->attr('href');
        print "<br><br>";
    });
});
