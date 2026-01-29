<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('get-employee-data', [EmployeeController::class, 'index']);
Route::post('store-form', [EmployeeController::class, 'store']);

// динамический роут с id
Route::post('employee/{id}', [EmployeeController::class, 'update']);

Route::get('/', function () {
    return view('welcome');
});
