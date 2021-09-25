<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('mucluong_id');
            $table->string('hovaten', 100);
            $table->boolean('gioitinh')->default(false);
            $table->date('ngaysinh');
            $table->string('cmnd', 50);
            $table->string('email', 100);
            $table->string('sdt', 15);
            $table->string('diachi', 255)->nullable();
            $table->boolean('trangthai')->default(false);
            $table->timestamps();
            $table->foreign('mucluong_id','fk_nhanvien_mucluong_id')->references('id')->on('mucluong')->onUpdate('CASCADE');
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
        Schema::table('nhanvien', function(Blueprint $table)
        {
            $table->dropForeign('fk_nhanvien_mucluong_id');
            $table->dropColumn('mucluong_id');
        });
        Schema::dropIfExists('nhanvien');
    }
}
