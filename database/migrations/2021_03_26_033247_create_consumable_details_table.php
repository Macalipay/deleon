<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumableDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumable_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('consumable_header_id');
            $table->unsignedBigInteger('inventory_id');
            $table->decimal('quantity', 13, 2);
            $table->string('description');
            $table->decimal('unit_price', 13, 2);
            $table->decimal('total', 13, 2);

            $table->foreign('consumable_header_id')
            ->references('id')
            ->on('consumable_headers');

            $table->foreign('inventory_id')
            ->references('id')
            ->on('inventories');
            
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
        Schema::dropIfExists('consumable_details');
    }
}
