<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
             // event
             $table->string('title');
             $table->string('description');

             $table->date('date');
             $table->time('time');

             $table->string('venue');

             $table->integer('fee');
             $table->string('coupon');

             $table->string('status'); // registration-on-going, arranged, postponed, rescheduled

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
        Schema::dropIfExists('events');
    }
}
