<?php

namespace App\Jobs;

use App\Models\Audiobook;
use App\Models\Item;
use App\Spiders\Audible;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

// Type: Scrape
// To inspect and scrape Audible Item (Audible Audiobook Page Detail)
// This job is immediately dispatched whenever a new Item model was created

class InspectAudibleItem implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $item;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Item $item)
    {
        //
        $this->item = $item;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Audible $spider)
    {
        //
        $spider->__construct( $this->item->url );

        $item = $spider->details();

        // if the item already exists on directories/shops
        // it means the item was already inserted by an admin or user suggestion
        // thus, the item from scraping progress is preceded by suggestion and already exists on directories/shops
        if (DB::table('directories')
            ->whereNotNull('audiobook_id')
            ->where('url', $item['title'])
            ->exists()) {

            exit;
        }

        // If Audiobook is found, we only need to insert Item into Directories table
        // ptherwise, create new Audiobook from the scrape item
        // from the persisting model, insert Item into Audiobook's Directory
        $audiobook = Audiobook::where('title', $item['title'])->first();

        if (! $audiobook) {
            $audiobook = Audiobook::create([
                'title' => $item['title']
            ]);
        }

        $audiobook->directories()->create([
            'title'     => $item['title'],
            'url'       => $item['url'],
            'platform'  => 'audiobook',
        ]);

    }
}
