<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_code')->unique()->default('tour_');
            $table->string('name');
            $table->string('avatar');
            $table->bigInteger('price');
            $table->date('departure_date');
            $table->string('departure_place');
            $table->integer('passenger_num');
            $table->string('departure_time');
            $table->integer('departure_hour');
            $table->integer('departure_minute');
            $table->integer('day_number');
            $table->integer('purchases_number')->default(0);
            $table->integer('tourGuide_id')->nullable();
            $table->integer('transport_id')->unsigned()->nullable();

            $table->integer('city_province_id')->unsigned();
            //2 is tour
            
            $table->string('content')->nullable();
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
        Schema::table('tours', function (Blueprint $table) {
            
        });
        Schema::dropIfExists('tours');
    }
}
