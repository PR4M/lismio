<?php

namespace App\Console\Commands;

use App\Models\Item;
use App\Enums\ItemType;
use App\Spiders\Audible;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TouchAudible extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'touch:audible';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Web Craler with HTTP Request on Audible.net';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // dd ('artisan called');

        // $this->option('type') == 'newest' ?
        //    $this->inspectNewest() : $this->inspectBackwards();

        $this->inspectNewest();
    }

    // This Artisan Command is scheduled as queue job when option 'newest'
    // A Web Crawler based on Goutte/DOmCrawler is dispatched to visit Audible new releases page
    // All the latest items on the page will be crawled and extracted
    private function inspectNewest()
    {
        $this->extract("https://www.audible.com/newreleases");
    }

    // This Artisan Command is scheduled as queue job when no option is provided
    // A Web Crawler based on Goutte/DOmCrawler is dispatched to visit Audible new releases page
    // All the items on the page will be crawled and extracted
    private function inspectBackwards()
    {
        // Read latest page indexed by the web crawler
        $pageNumber = 3;

        $this->extract("https://www.audible.com/newreleases?page={$pageNumber}");
    }

    private function extract($source)
    {
        $totalDuplicate = 0;

        $spider = new Audible($source);

        $spider->items()->each(function($item, $i) use ($totalDuplicate) {

            // Save item to "items" table if it's not existing yet
            // A new dispatch job for each item is automatically created
            // through \App\Model\Item event listener inside the model

            if (DB::table('items')
                ->where('platform', 'audible')
                ->where('url', $item['title'])
                ->doesntExist()) {

                Item::create([
                    'title' => $item['title'],
                    'url'   => $item['url'],
                    'type'  => ItemType::SCRAPE->value,
                    'platform' => 'audible'
                ]);

            } else {
                // increase value on $totalDuplicate variable
                $totalDuplicate = $totalDuplicate + 1;
            }

            // If $totalDuplicate == 10
            // Exit this loop extraction
            // Update Redis KV

            if ($totalDuplicate == 10) {
                exit;
            }

            // if $i equal to latest index (reached latest loop)
            // visit page with pageNumber - 1
            // Update Redis KV
            if ($i == 19) {

            }

        });
    }
}

