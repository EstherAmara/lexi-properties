<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_inspections', function (Blueprint $table) {
            $table->id();
            $table->string('property_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->longText('message');
            $table->date('date');
            $table->time('time', $precision = 0 );
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
        Schema::dropIfExists('book_inspections');
    }
}
