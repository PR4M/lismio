<?php

namespace App\Spiders;

use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

// A Spider for Audible (https://www.audible.com/)
// Type: Scrape | Use: PHP Goutte
// Link of our documentation: https://notion.so/xxx

class Audible
{
    public $client;
    public $crawler;

    protected $title;
    protected $description;
    protected $releaseDate;
    protected $image;
    protected $type;
    protected $duration;
    protected $contributors;

    public function __construct($url)
    {
        $this->client = new Client(HttpClient::create(['timeout' => 60]));
        $this->crawler = $this->client->request('GET', $url);
    }

    // Set HTTP Headers with User Agent

    // Return Audiobook Title
    public function title()
    {

    }

    // Return Audiobook Description
    public function description()
    {

    }

    // Return Audiobook Duration

    // Return Audiobook Release Date

    // Return Audiobook Image

    // Return Audiobook Type (Abridged/Unabridged)

    // Return Audiobook Contributors (Authors & Narrators)

    // Return Audiobook Tags (Categories)

    //
    public function itemsLink()
    {
        $links = [];

        $this->crawler->filter('li > h3 > a')->each(function ($node) use ($links) {
            $links[] = $node->text;
        });

        return $links;
    }

    public function platform()
    {
        return 'audible';
    }
}
