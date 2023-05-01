<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHblPaymentResultResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hbl_payment_result_responses', function (Blueprint $table) {
            $table->id();
            $table->string('pid');
            $table->string('order_no');
            $table->json('body');
            $table->tinyInteger('payment_status')->default(0);
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
        Schema::dropIfExists('hbl_payment_result_responses');
    }
}
