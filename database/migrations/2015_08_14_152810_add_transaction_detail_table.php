<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTransactionDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Contains transaction details
               Schema::create('transaction_detail', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('transaction_header_id')
                        ->index()
                        ->references('id')
                        ->on('transaction_header');
                $table->integer('item_id'); //item being moved
                $table->float('item_qty'); //quantity of items being moved
                $table->float('item_val'); //total value of items being moved
                $table->float('itel_cost'); //total cost of items being moved
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
            Schema::drop('transaction_detail');
	}

}
