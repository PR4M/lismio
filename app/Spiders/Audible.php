<?php

namespace App\Spiders;

use Goutte\Client;
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

    protected function selector($key)
    {
        $option = [
            'items'             => 'li > h3 > a',
            'pages'             => '',
            'item_title'        => '',
            'item_description'  => '',
            'item_image'        => '',
            'item_type'         => '',
            'item_tags'         => '',
            'item_release_date' => '',
            'item_contributors' => '',
        ];

        return $option[$key];
    }

    // Crawl the web page dom to get items that we're looking for
    // Each item will be saved into a collection of array
    // It will be returned as Laravel Collection
    public function items()
    {
        $collection = array();

        $this->crawler->filter( $this->selector('items') )
            ->each(function (Crawler $node, $i) use (&$collection) {
                $collection[$i] = [
                    'title' => $node->text(),
                    'link'  => $node->attr('href')
                ];
        });

        return collect($collection);
    }

    // Crawl the web page dom of the item detail that we're looking for
    // Each item detail will be saved into a collection
    // It will be returned as Laravel Collection
    public function details()
    {
        // WIP
    }
}
