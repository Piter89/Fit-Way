<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserHasIndicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_indices', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned();
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('indices_id')->unsigned();
           // $table->foreign('indices_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
        Schema::table('user_has_indices', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

        });
        Schema::table('user_has_indices', function (Blueprint $table) {
            $table->foreign('indices_id')
                ->references('id')
                ->on('fit_indices')
                ->onDelete('cascade');


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