<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('consumable_id');
            $table->string('total_count')->default(0);
            $table->decimal('price', 13, 2);
            $table->decimal('selling_price', 13, 2);
            $table->string('critical_level')->default(0);
            $table->string('sold_count')->default(0);
            $table->string('quantity_stock')->default(0);
            $table->string('supplier')->nullable();
            $table->string('status')->default('Critical Level');
            $table->timestamps();

            $table->foreign('consumable_id')
                ->references('id')
                ->on('consumables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventories');
    }
}
