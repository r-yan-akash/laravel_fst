<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('student_id',10);
            $table->string('mobile',11);
            $table->integer('age')->default(0)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('students');
    }
}
