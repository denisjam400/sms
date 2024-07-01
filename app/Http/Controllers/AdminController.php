<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Route;

class AdminController extends Controller
{
    public function mainAdminView(){                   
        $Auth = Auth::user();
        $routeName =  Route::current()->uri;

        return view('Admin.administrative', compact('routeName','Auth'));
    }
}
