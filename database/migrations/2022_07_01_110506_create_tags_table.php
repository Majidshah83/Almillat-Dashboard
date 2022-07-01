<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('page_name',255);
            $table->string('title',255);
            $table->string('description',255);
            $table->string('key_words',255);
            $table->string('robots',255);
            $table->string('canonical',255);
            $table->string('twitter_title',255);
            $table->string('twitter_description',255);
            $table->string('twitter_card',255);
            $table->string('twitter_site',255);
            $table->string('ogsite_title',255);
            $table->string('ogsite_name',255);
            $table->string('ogsite_description',255);
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
        Schema::dropIfExists('tags');
    }
}