<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EntrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/home', function () {
    return view('welcome');
});
Route::resource('/students', StudentController::class);
Route::resource('/teachers', TeacherController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/batches', BatchController::class);
Route::resource('/enrollments', EntrollmentController::class);
Route::resource('/payments', PaymentController::class);

Route::get('report/report1/{pid}', [ReportController::class, 'report1']);

