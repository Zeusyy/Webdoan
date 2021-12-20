<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('receipt_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('product_code');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('description');
            $table->timestamps();

            // $table->primary(['receipt_id','service_id']);
            $table->foreign('receipt_id')->references('id')->on('receipts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receipt_details', function (Blueprint $table) {
            $table->dropForeign('receipt_details_receipt_id_foreign');
        });
        
        Schema::dropIfExists('receipt_details');
    }
}
