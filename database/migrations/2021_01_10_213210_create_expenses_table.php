<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('expensetype_id');
            $table->string('description');
            $table->decimal('amount', 13, 2);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('paymenttype_id');
            $table->string('date');

            $table->foreign('expensetype_id')
            ->references('id')
            ->on('expense_types');

            $table->foreign('user_id')
            ->references('id')
            ->on('users');

            $table->foreign('paymenttype_id')
            ->references('id')
            ->on('payment_types');

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
        Schema::dropIfExists('expenses');
    }
}
