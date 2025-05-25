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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    return view('welcome');
})->name('home');
// Route::get('/addStudent', function(){
//     return view('student.addStudent',[StudentController::class,'create']);
// });
// Route::get('/listStudent', function(){
//     return route('student.listStudent',[StudentController::class,'index']);
// });

Route::get('student.form',[StudentController::class,'create'])->name('students.create');

Route::get('/listStudent',[StudentController::class,'index'])->name('students.index');

Route::post('/studentAdd',[StudentController::class,'store'])->name('student.add');
Route::get('/students/{id}',[StudentController::class,'show'])->name('students.show');
Route::get('/students.edit/{id}',[StudentController::class,'edit'])->name('students.edit');
Route::put('/student/{id}',[StudentController::class,'update'])->name('students.update');
Route::delete('/students/{id}',[StudentController::class,'destroy'])->name('students.destroy');

