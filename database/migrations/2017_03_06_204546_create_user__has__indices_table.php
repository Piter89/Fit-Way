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
            $table->float('body_fat');
            $table->float('body_fat_weight');
            $table->integer('endurance');
            $table->integer('strength');
            $table->integer('suppleness');
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
        Schema::dropIfExists('fit_indices');
    }
}