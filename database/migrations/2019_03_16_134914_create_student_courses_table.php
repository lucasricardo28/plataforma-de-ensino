<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateStudentCoursesTable.
 */
class CreateStudentCoursesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_courses', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->integer('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
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
		Schema::drop('student_courses');
	}
}
