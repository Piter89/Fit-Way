<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFitIndicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fit_indices', function (Blueprint $table) {
            $table->increments('id');
            $table->float('body_fat');
            $table->integer('pulse_1');
            $table->integer('pulse_2');
            $table->integer('pulse_3');
            $table->integer('strength');
            $table->integer('suppleness');
            $table->integer('user_id')->unsigned();

            $table->timestamps();
        });
        Schema::table('fit_indices', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fit_indices');
    }
}
