<?php

use App\Http\Controllers\CalculController;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;



 
Route::get('/', function () {
    return view('welcome');
});
Route::resource("/student", StudentController::class);


