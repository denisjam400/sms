<?php

namespace App\Http\Controllers;

use Auth;
use Route;

class CoursesController extends Controller
{
    public function AllCourses()
    {

        $Auth = Auth::user();
        $routeName = Route::current()->uri;

        return view('student.courses', compact('routeName', 'Auth'));
    }

    public function EachCourseDisplay()
    {
        $Auth = Auth::user();
        $routeName = Route::current()->uri;

        return view('student.eachCoursesDisplay', compact('routeName', 'Auth'));

    }
}
