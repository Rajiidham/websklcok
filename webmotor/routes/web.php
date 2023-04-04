<?php

use App\Http\Controllers\MotorController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MotorController::class, 'welcome'])->name('welcome');

Route::get('/motor', [MotorController::class, 'index'])->name('home');

// Data Motor

Route::get('/motor/create', [MotorController::class, 'create'])->name('motor.create');

Route::post('/motor-add', [MotorController::class, 'store'])->name('motor.add');

//edit 

Route::get('/motor/edit/{id}', [MotorController::class, 'edit'])->name('motor.edit');

Route::patch('/motor/{id}', [MotorController::class, 'update'])->name('motor.update');

Route::delete('/motr/{id}', [MotorController::class, 'destroy'])->name('motor.destroy');