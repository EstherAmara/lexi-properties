<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->longText('about_first')->nullable();
            $table->longText('about_second')->nullable();
            $table->string('image');
            $table->string('agents_note');
            $table->string('email');
            $table->string('phone');
            $table->string('whatsapp');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('facebook');
            $table->string('address');

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
        Schema::dropIfExists('settings');
    }
}
