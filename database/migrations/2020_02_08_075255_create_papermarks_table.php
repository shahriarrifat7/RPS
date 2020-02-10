<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapermarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papermarks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('exam_year',4);
            $table->String('exam_name',70);
            $table->String('course_code',10);
            $table->String('course_title',70);
            $table->String('section',1);
            $table->text('paper_code');
            $table->text('marks');
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
        Schema::dropIfExists('papermarks');
    }
}
