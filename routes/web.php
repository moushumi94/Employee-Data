<?php

use App\Http\Controllers\EmployeeDetailController;
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
    return view('welcome');
}); 


Route::get('/emp_data' , [EmployeeDetailController::class, 'index'])->name('emp_data');
Route::get('/emp_data/create' , [EmployeeDetailController::class, 'create'])->name('emp_data.create');
Route::post('/emp_data/store' , [EmployeeDetailController::class, 'store'])->name('emp_data.store');
Route::get('/emp_data/edit/{employee_Detail}' , [EmployeeDetailController::class, 'edit'])->name('emp_data.edit');
Route::post('/emp_data/update/{employee_Detail}' , [EmployeeDetailController::class, 'update'])->name('emp_data.update');
Route::get('/emp_data/delete/{employee_Detail}' , [EmployeeDetailController::class, 'destroy'])->name('emp_data.delete');