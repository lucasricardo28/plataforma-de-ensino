<?php

namespace App\Http\Controllers;

use App\Entities\Course;
use App\Entities\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function dashboard(){
        $countStudents = Student::count();
        $countCourses = Course::count();

        return view('/welcome',compact('countStudents','countCourses'));
    }
}
