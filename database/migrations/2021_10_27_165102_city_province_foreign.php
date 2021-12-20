<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CityProvinceForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('hotels',function(Blueprint $table){
            $table->foreign('city_province_id')->references('id')->on('city_provinces');
        });
        Schema::table('tours',function(Blueprint $table){
            $table->foreign('city_province_id')->references('id')->on('city_provinces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('hotels',function(Blueprint $table){
            $table->dropForeign('hotels_city_province_id_foreign');
        });
        Schema::table('tours',function(Blueprint $table){
            $table->dropForeign('tours_city_province_id_foreign');
        });
    }
}
