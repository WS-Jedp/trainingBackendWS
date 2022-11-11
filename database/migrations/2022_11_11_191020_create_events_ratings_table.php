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
        Schema::create('events_ratings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('comment');
            $table->integer('score');
            $table->integer('event_id');
            $table->foreign('event_id')->references('id')->on('events');
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
        Schema::dropIfExists('events_ratings');
    }
};
