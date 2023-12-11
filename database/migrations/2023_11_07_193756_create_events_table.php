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
            $table->string('title', 100);
            $table->string('detail', 1000)->nullable();
            $table->datetime('date_start');
            $table->datetime('date_end')->nullable();
            $table->string('qr_url')->nullable();
            $table->string('cover_url')->nullable();
            $table->string('address', 200)->nullable();
            $table->unsignedBigInteger('creator_id')->nullable();
            $table->unsignedBigInteger('photographer_id')->nullable();

            $table->foreign('creator_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('photographer_id')->references('id')->on('users')->onDelete('set null');

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
