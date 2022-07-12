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
        Schema::create('audiobook_contributors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('audiobook_id');
            $table->foreign('audiobook_id')->references('id')->on('audiobooks')->onDelete('cascade');

            $table->unsignedBigInteger('contributor_id');
            $table->foreign('contributor_id')->references('id')->on('contributors')->onDelete('cascade');

            $table->enum('type', ['author', 'narrator']);

            $table->comment(
                "A table of Audiobook Contributors \n".
                "type: \n".
                "Author, is the writer of Audiobook \n".
                "Narrator, is the narrator of Audiobook"
            );

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audiobook_contributors');
    }
};
