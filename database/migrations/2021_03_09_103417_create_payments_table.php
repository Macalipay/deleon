<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dailysales_id');
            $table->string('amount');
            $table->unsignedBigInteger('payment_id');
            $table->string('date');
            $table->timestamps();

            $table->foreign('dailysales_id')
                ->references('id')
                ->on('daily_sales');

            $table->foreign('payment_id')
                ->references('id')
                ->on('payment_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
