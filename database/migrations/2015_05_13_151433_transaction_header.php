<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransactionHeader extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('transaction_header', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('transaction_type_id')
                    ->index()
                    ->references('id')
                    ->on('transaction_type');
            $table->date('document_date'); //date in preprinted in document
            $table->string('document_number'); //number in preprinted document
            $table->text('note'); //any note the use would like to take down
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::drop('transaction_header');
    }

}
