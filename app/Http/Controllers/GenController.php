<?php

namespace App\Http\Controllers;

use App\Models\Student_Data;
use Auth;
use Illuminate\Http\Request;
use Route;

class GenController extends Controller
{
    public function onboarding()
    {
        $Auth = Auth::user();
        $routeName = Route::current()->uri;

        return view('onboarding', compact('routeName', 'Auth'));
    }

    public function onboardingData(Request $request)
    {
        Student_Data::create([
            'user_id' => Auth::user()->id,
            'nationality' => $request->nationality,
            'state' => $request->state,
            'age' => $request->age,
            'address' => $request->address,
            'Phone_Number' => $request->phone_number,
            'Phone_Number_2' => $request->phone_number2,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
        ]);

        return redirect()->route('dashboard');
    }
}
