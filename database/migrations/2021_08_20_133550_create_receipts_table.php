<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->integer('id')->unsigned()->unique();
            $table->integer('user_id')->unsigned();
            $table->integer('price_sum')->unsigned();
            $table->integer('payment_id')->unsigned()->nullable();
            $table->integer('status_id')->unsigned()->default(3); //id 3 is waiting
            $table->boolean('is_finish')->default(false);
            $table->integer('accept_by')->unsigned()->nullable();
            $table->integer('cancel_by')->unsigned()->nullable();
            $table->integer('finish_by')->unsigned()->nullable();
            $table->string('description')->nullable();
            $table->dateTime('paid_at')->nullable();
            $table->timestamps();

            $table->primary('id');
            // $table->foreign('user_id')  ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('accept_by')->references('id')->on('users');
            $table->foreign('cancel_by')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('receipts',function(Blueprint $table){
            // $table->dropForeign('receipts_user_id_foreign');
            $table->dropForeign('receipts_accept_by_foreign');
            $table->dropForeign('receipts_cancel_by_foreign');
        });
        Schema::dropIfExists('receipts');
    }
}
