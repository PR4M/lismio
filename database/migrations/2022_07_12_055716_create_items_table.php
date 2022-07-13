<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->char('platform', 10)->index();
            $table->unsignedTinyInteger('type');
            $table->timestamps();

            $table->comment(
                "A table of Items (Scrape/API) \n".
                "type: \n".
                "1. is an API item \n".
                "2. is a Scrape item"
            );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
};
