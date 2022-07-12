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
        Schema::create('directories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('url')->index();
            $table->char('platform', 10)->index();
            $table->tinyInteger('status')->default(0);
            $table->dateTime('execute_at');
            $table->unsignedTinyInteger('source_type')->default(1);
            $table->timestamps();

            $table->unsignedBigInteger('audiobook_id');
            $table->foreign('audiobook_id')->references('id')->on('audiobooks')->onDelete('cascade');

            $table->comment(
                "A table to store Audiobook's directory".
                "url: Audiobook's url on the platform".
                "platform: AUdiobook's platform".
                "status: 1. Accepted 2. Waiting for Review".
                "source_type: 1. API/Scrape 2. User Suggestion 3. Admin Submission"
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
        Schema::dropIfExists('scrapes');
    }
};
