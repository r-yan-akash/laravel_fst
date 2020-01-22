<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyinfosTable extends Migration
{

    public function up()
    {
        Schema::create('myinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('roll');
            $table->unsignedBigInteger('department_id');
            $table->tinyInteger('status')->default(1);
            $table->foreign('department_id')->references('id')->on
            ('departments')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('myinfos');
    }
}
