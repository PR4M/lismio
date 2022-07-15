<?php

namespace App\Models;

use App\Enums\ItemType;
use App\Jobs\InspectAudibleItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Model event listener
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::created(function($model) {
            // if this model created by Artisan Command Job for Scraping
            // dispatch a new queue job for this model
            if ($model->type == ItemType::SCRAPE->value) {
                InspectAudibleItem::dispatchSync($model);

                //InspectAudibleItem::dispatch($model)
                //    ->onConnection('redis')
                //    ->onQueue('scrapes');


                // InspectAudibleItem::dispatch($model)
                //     ->onConnection('redis')
                //     ->onQueue('scrapes')
                //     ->delay(now()->addSeconds(30));
            }
        });

        static::updating(function($model) {
            //
            // $model->unix_updated_at = round(microtime(true));
        });
    }

}
