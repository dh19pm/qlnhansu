<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanluongBaohiemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanluong_baohiem', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nhanluong_id');
            $table->unsignedInteger('baohiem_id');
            $table->foreign('nhanluong_id','fk_nhanluong_baohiem_nhanluong_id')->references('id')->on('nhanluong')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('baohiem_id','fk_nhanluong_baohiem_baohiem_id')->references('id')->on('baohiem')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nhanluong_baohiem', function(Blueprint $table)
        {
            $table->dropForeign('fk_nhanluong_baohiem_nhanluong_id');
            $table->dropForeign('fk_nhanluong_baohiem_baohiem_id');
            $table->dropColumn('nhanluong_id');
            $table->dropColumn('baohiem_id');
        });
        Schema::dropIfExists('nhanluong_baohiem');
    }
}
