<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
use Auth;

class StudentDataController extends Controller
{
   public function displayStudentView()
   {
   
    $Auth = Auth::user();
    $routeName =  Route::current()->uri;

    if($Auth->usertype === "student"){

    return view('student.dashboard',compact('routeName','Auth'));

   }
   else{

      return view('Admin.dashboard',compact('routeName','Auth'));

   }
   }
}
