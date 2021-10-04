<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichnghiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichnghi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenln', 255);
            $table->date('ngaybatdau');
            $table->date('ngayketthuc');
            $table->boolean('huongluong')->default(false);
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
        Schema::dropIfExists('lichnghi');
    }
}
