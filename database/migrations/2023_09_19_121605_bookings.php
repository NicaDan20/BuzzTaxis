<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
        if (!Schema::hasTable('bookings')) {
            Schema::create("bookings", function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->smallInteger('nr_people');
                $table->dateTime('date');
                $table->string('phone');
                $table->string('email');
                $table->string('pickup', 1024);
                $table->string('destination', 1024);
                $table->text('comment');
                $table->boolean('status');
                $table->timestamps();
            });    
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
