<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailySalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('sales_id');
            $table->unsignedBigInteger('product_id');
            $table->text('description');
            $table->string('quantity');
            $table->decimal('amount', 13, 2);
            $table->decimal('balance', 13, 2)->default(0.00);
            $table->string('production_status');
            $table->string('payment_status');
            $table->timestamps();

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers');

            $table->foreign('sales_id')
                ->references('id')
                ->on('sales_accounts');

            $table->foreign('product_id')
                ->references('id')
                ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daily_sales');
    }
}
