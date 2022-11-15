<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions_ratings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('comment');
            $table->integer('score');
            $table->integer('sessions_id');
            $table->foreign('sessions_id')->references('id')->on('sessions');
            $table->integer('attendees_id');
            $table->foreign('attendees_id')->references('id')->on('attendees');
            // $table->foreignId('event_id')->constrained('events');
            // $table->foreignId('attendees_id')->constrained('attendees');
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
    }
};
