<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHesoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heso', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('luongcb');
            $table->float('bat1', 5, 2);
            $table->float('bat2', 5, 2);
            $table->float('bat3', 5, 2);
            $table->float('bat4', 5, 2);
            $table->float('bat5', 5, 2);
            $table->float('bat6', 5, 2);
            $table->float('bat7', 5, 2);
            $table->float('bat8', 5, 2);
            $table->float('bat9', 5, 2);
            $table->float('bat10', 5, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heso');
    }
}
