<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('exam_name',70);
            $table->String('course_code',10);
            $table->String('student_id',10);
            $table->String('course_title',70);
            $table->float('ctm');
            $table->float('section_a');
            $table->float('section_b');
            $table->float('total');
            $table->float('credit');
            $table->String('letter_grade',2);
            $table->float('grade_point');
            $table->float('point_secured');
            
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
        Schema::dropIfExists('course_results');
    }
}
