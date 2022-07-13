<?php

namespace App\Console\Commands;

use App\Models\Item;
use App\Enums\ItemType;
use App\Spiders\Audible;
use Illuminate\Console\Command;

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
    public function handle(Audible $spider)
    {
        $items = $spider->itemsLink();

        foreach ($items as $item) {
            // save item to "items" table
            Item::create([
                'title' => $item->title,
                'description' => $item->description,
                'link' => $item->link,
                'type' => ItemType::SCRAPE->value,
                'platform' => $spider->platform()
            ]);
        }
    }
}
