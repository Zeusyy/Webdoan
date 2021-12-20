<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipt_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            //receipt_statuses_id_foreign
            // $table->foreign('id')->references('status_id')->on('receipts');
        });
        Schema::table('receipts', function (Blueprint $table) {
            
            //receipt_statuses_id_foreign
            $table->foreign('status_id')->references('id')->on('receipt_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receipts', function (Blueprint $table) {
            
            //receipt_statuses_id_foreign
            $table->dropForeign('receipts_status_id_foreign');
        });
        Schema::dropIfExists('receipt_statuses');
    }
}
