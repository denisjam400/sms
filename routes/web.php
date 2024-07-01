<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\GenController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentDataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('laraWaste.laravelWelcome');
});

Route::get('/attendance', function () {
    return view('welcome');
});

Route::get('/annoucement', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::controller(StudentDataController::class)->group(function () {
        Route::get('dashboard', 'displayStudentView')->name('dashboard');
        Route::get('academics', '');
    });

    Route::controller(GenController::class)->group(function () {
        Route::get('onboarding', 'onboarding');
        Route::post('onboard', 'onboardingData');
    });

    Route::controller(CoursesController::class)->group(function () {
        Route::get('courses', 'AllCourses');
        Route::get('courses/title', 'EachCourseDisplay');
    });

    Route::controller(InstructorController::class)->group(function () {
        Route::post('/admin_add', 'instructorCreation');
    });

    Route::controller(AdminController::class)->group(function () {
        Route::get('/administrative_board', 'mainAdminView');
    });
});
