<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->foreign('order_id', 'items_ibfk_1')->references('id')->on('orders')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('product_id', 'items_ibfk_2')->references('id')->on('products')->onUpdate('RESTRICT')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function(Blueprint $table) {
            $table->dropForeign('items_ibfk_1');
            $table->dropForeign('items_ibfk_2');
        });
    }
}
