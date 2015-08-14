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
            $table->string('short_description'); //example FCRE, PROF, FCON
            $table->string('description'); //Long description when possible
            $table->integer('effect_inv',1); //+1, -1, 0
            //a transaction might require value, quantity, either or none
            $table->bool('req_qty')->default(true); //requires quantity
            $table->bool('req_val')->default(true); //requires value
            
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
