<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String("name",80);
            $table->integer("year");
            $table->String("semester",20);
            $table->String("type",12);
            $table->String("improvement_year",4)->default(null);
            $table->Date("start_date");
            $table->Date("end_date");
            $table->text("course_names");
            $table->text("course_codes");
            $table->text("course_credits");
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
        Schema::dropIfExists('exams');
    }
}
