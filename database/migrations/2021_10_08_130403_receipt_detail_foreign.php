<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReceiptDetailForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('receipt_details', function (Blueprint $table) {
            
            $table->foreign('product_code')->references('product_code')->on('products');
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
        Schema::table('receipt_details', function (Blueprint $table) {
            $table->dropForeign('receipt_details_product_code_foreign');
        });
    }
}
