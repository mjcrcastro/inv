<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransactionType extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //transaction types allows for mutiple definitions
        //of inventory input and output,
        //all inputs behave the same, the affect cost
        //all outputs behave the same, the take last average cost
        //having multiple definitions for input/output allows 
        //for a better organization of the transactions
        Schema::create('transaction_type', function(Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->char('i_o',1); //character "i" means input, "o" output
            //a transaction might require value, quantity, either or none
            $table->bool('uses_quantity')->default(true);
            $table->bool('uses_value')->default(true);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
//
    }

}
