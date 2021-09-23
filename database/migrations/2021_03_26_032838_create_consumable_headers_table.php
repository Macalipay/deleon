<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumableHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumable_headers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('title');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('sales_id');
            $table->decimal('subtotal', 13, 2);
            $table->decimal('total', 13, 2);
            $table->decimal('balance', 13, 2)->default(0.00);
            $table->string('status');
            $table->string('payment_status');
            $table->unsignedBigInteger('user_id');
            $table->boolean('type');

            $table->foreign('user_id')
            ->references('id')
            ->on('users');

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers');

            $table->foreign('sales_id')
                ->references('id')
                ->on('sales_accounts');

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
        Schema::dropIfExists('consumable_headers');
    }
}
