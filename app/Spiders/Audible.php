<?php

namespace App\Spiders;

use Goutte\Client;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

// A Spider for Audible (https://www.audible.com/)
// Type: Scrape | Use: PHP Goutte
// Link of our documentation: https://notion.so/xxx

class Audible
{
    public $url;
    public $client;
    public $crawler;

    public function __construct($link)
    {
        $this->client = new Client(
            HttpClient::create($this->headers())
        );

        $this->client->setServerParameter(
            'HTTP_USER_AGENT',
            'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:73.0) Gecko/'
        );

        $this->crawler = $this->client->request('GET', $this->url($link));
    }

    public function url($link)
    {
        return $this->url = $link;
    }

    // Set HTTP Headers with User Agent
    protected function headers()
    {
        return array(
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
        );
    }

    // We use Selector to retrieve list of items
    // Usually this will be used on index page
    // Such as New Releases page, any page with index or page numbers
    protected function selector($key)
    {
        $option = [
            'listing_item_title'        => 'li > h3 > a',
            'listing_item_author'       => '',
            'listing_item_narrators'    => '',
            'listing_item_description'  => '',
            'listing_item_image'        => '',
            'listing_item_preview'      => '',
            'listing_item_type'         => '',
            'listing_item_tags'         => '',
            'listing_item_release_date' => '',

            'listing_page_number'      => '',
        ];

        return $option[$key];
    }

    // We use xPath to retrieve a value of an item
    // Usually this will be used on detail page
    // Such as on Audiobook's detail page
    protected function xpath($key)
    {
        $option = [
            'single_item_title'         => '//*[@id="center-1"]/div/div[3]/div/div/div/div[2]/span/ul/li[1]/h1',
            'single_item_author'        => '//*[@id="center-1"]/div/div[3]/div/div/div/div[2]/span/ul/li[3]',
            'single_item_narrators'     => '//*[@id="center-1"]/div/div[3]/div/div/div/div[2]/span/ul/li[4]',
            'single_item_description_1' => '//*[@id="center-3"]/div/div/div[1]',
            'single_item_description_2' => '//*[@id="center-8"]/div/div/div[1]',
            'single_item_image'         => '//*[@id="center-1"]/div/div[3]/div/div/div/div[1]/div/div[1]/img',
            'single_item_preview'       => '//html/body/div[1]/div[8]/div[2]/div/div[3]/div/div/div/div[1]/div/div[2]/div/span/button',
            'single_item_type'          => '',
            'single_item_tags'          => '//*[@id="center-9"]/div/div/div/div',
            'single_item_release_date'  => '',
        ];

        return $option[$key];
    }

    // Return cleaned or formatted Title
    public function title()
    {
        return $this->crawler->filterXPath( $this->xpath('single_item_title') )->text();
    }

    // Return cleaned or formatted Description
    public function description()
    {
        if ($this->crawler->filterXPath( $this->xpath('single_item_description_2') )->text() != '') {
            return $this->crawler->filterXPath( $this->xpath('single_item_description_2') )->text();
        }

        return $this->crawler->filterXPath( $this->xpath('single_item_description_1') )->text('none');
    }

    // Return Original Image URL from the source
    public function imageOriginUrl()
    {
        return $this->crawler->filterXPath( $this->xpath('single_item_image') )->attr('src');
    }

    // Return Original Preview Sample URL from the source
    public function previewSampleOriginUrl()
    {
        // WIP
        if ($this->crawler->filterXPath( $this->xpath('single_item_preview') )->attr('data-mp3') != '') {
            return $this->crawler->filterXPath( $this->xpath('single_item_preview') )->attr('data-mp3');
        }

        return ;
    }

    // Return cleaned or formatted duration in total minutes
    public function duration()
    {
        // WIP
        return;
    }


    // Return cleaned or formatted Author(s)
    public function authors()
    {
        $elements = $this->crawler->filterXPath( $this->xpath('single_item_author') )->text();

        return Str::of($elements)->after('by: ')->explode(',');
    }

    // Return cleaned or formatted Narrator(s)
    public function narrators()
    {
        $elements = $this->crawler->filterXPath( $this->xpath('single_item_narrators') )->text();

        return Str::of($elements)->after('by: ')->explode(',');
    }

    // Return cleaned or formatted Tags
    public function tags()
    {
        // WIP
        return;
    }

    // Crawl the web page dom to get items that we're looking for
    // Each item will be saved into a collection of array
    // It will be returned as Laravel Collection
    public function items()
    {
        $collection = array();

        $this->crawler->filter( $this->selector('listing_item_title') )
            ->each(function (Crawler $node, $i) use (&$collection) {
                $collection[$i] = [
                    'title' => $node->text(),
                    'url'   => 'https://www.audible.com' . $node->attr('href')
                ];
        });

        return collect($collection);
    }

    // Crawl the web page dom of the item detail that we're looking for
    // Each item detail will be saved into a collection
    // It will be returned as Laravel Collection
    public function details()
    {
        return [
            'title'         => $this->title(),
            'description'   => $this->description(),
            'image'         => $this->imageOriginUrl(),
            //'sample'        => $this->previewSampleOriginUrl()
        ];
    }
}
