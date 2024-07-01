<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function instructorCreation(Request $request)
    {
        Instructor::create([
            'user_id' => $request->user_id,
            'nationality' => $request->nationality,
            'state' => $request->state,
            'age' => $request->age,
            'address' => $request->address,
            'Phone_Number' => $request->phone_number,
            'Phone_Number_2' => $request->phone_number2,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'role_in_company' => $request->role,
        ]);

        return back();
    }
}
