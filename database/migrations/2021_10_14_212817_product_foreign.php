<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Schema::table('tours',function(Blueprint $table){
        //     $table->foreign('product_code')->references('product_code')->on('products')->onDelete('cascade');
        // });
        // Schema::table('hotels',function(Blueprint $table){
        //     $table->foreign('product_code')->references('product_code')->on('products')->onDelete('cascade');
        // });
        // Schema::table('room_types',function(Blueprint $table){
        //     $table->foreign('product_code')->references('product_code')->on('products')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        // Schema::table('tours',function(Blueprint $table){
        //     $table->dropForeign('tours_product_code_foreign');
        // });
        // Schema::table('hotels',function(Blueprint $table){
        //     $table->dropForeign('hotels_product_code_foreign');
        // });
        // Schema::table('room_types',function(Blueprint $table){
        //     $table->dropForeign('room_types_product_code_foreign');
        // });
    }
}
