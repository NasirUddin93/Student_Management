<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});

Route::get('/addStudent', function(){
    return view('student.addStudent',[StudentController::class,'create']);
});
Route::get('/listStudent', function(){
    return view('student.listStudent',[StudentController::class,'index']);
});
Route::post('/studentAdd',[StudentController::class,'store'])->name('student.add');

