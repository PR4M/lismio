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
        Schema::create('audiobooks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->char('language', 10)->default('english');
            $table->string('isbn')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->string('image')->nullable();
            $table->boolean('is_unabridged')->default(false);
            $table->unsignedInteger('duration')->default(0);
            $table->date('release_date');
            $table->string('preview_link')->nullable();
            $table->unsignedTinyInteger('status')->default(0);

            $table->timestamps();

            $table->comment(
                "A table of Audiobooks \n".
                "source_url: The origin url of Audiobook \n".
                "preview_link: The preview link of Audiobook".
                "status: \n".
                "0. Waiting admin/moderator review \n".
                "1. Approved/published by admin \n".
                "2. To be determined \n".
                "source type: \n".
                "1. By web crawler/web scraper \n".
                "2. User suggestion \n".
                "3. Admin/moderator"
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
        Schema::dropIfExists('audiobooks');
    }
};
