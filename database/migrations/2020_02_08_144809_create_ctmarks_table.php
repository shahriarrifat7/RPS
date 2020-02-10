<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctmarks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('exam_year',4);
            $table->String('exam_name',70);
            $table->String('course_code',10);
            $table->String('course_title',70);
            $table->text('student_id');
            $table->text('ct_marks');
            $table->text('attendance');
            $table->text('total');
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
        Schema::dropIfExists('ctmarks');
    }
}
