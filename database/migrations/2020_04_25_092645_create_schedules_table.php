<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('time1');
            $table->text('period1');
            $table->string('time2');
            $table->text('period2');
            $table->text('todo1')->nullable();
            $table->text('todo2')->nullable();
            $table->text('todo3')->nullable();
            $table->text('todo4')->nullable();
            $table->text('todo5')->nullable();
            $table->text('todo6')->nullable();
            $table->text('todo7')->nullable();
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
        Schema::dropIfExists('schedules');
    }
}
