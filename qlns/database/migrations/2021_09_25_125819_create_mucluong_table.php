<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMucluongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mucluong', function (Blueprint $table) {
            $table->increments('id');
            $table->index('phongban_id');
            $table->integer('chucvu_id');
            $table->integer('luongcb');
            $table->integer('phucap');
            $table->timestamps();
            $table->foreign('phongban_id','fk_mucluong_phongban_id')->references('id')->on('phongban')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mucluong', function(Blueprint $table)
        {
            $table->dropForeign('fk_mucluong_phongban_id');
            $table->dropColumn('phongban_id');
        });
        Schema::dropIfExists('mucluong');
    }
}
