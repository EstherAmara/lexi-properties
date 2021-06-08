<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();

            $table->string('address');
            $table->decimal('amount', 30, 2);
            $table->string('city');
            $table->longText('description');
            $table->string('measurement');
            $table->longText('payment_plan');
            $table->string('pictures');
            $table->string('proximity');
            $table->string('state');
            $table->string('title');
            $table->string('topography');

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
        Schema::dropIfExists('properties');
    }
}
