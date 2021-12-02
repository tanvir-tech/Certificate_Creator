<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            // records
            $table->integer('event_id');
            $table->integer('perticipant_id');

            $table->boolean('paid');
            $table->boolean('attended');
            $table->boolean('certified');

            $table->string('transaction_gateway');
            $table->integer('transaction_id')->nullable();
            // $table->integer('fee');

            $table->string('payment_token')->unique();

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
        Schema::dropIfExists('records');
    }
}
