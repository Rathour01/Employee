<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[EmployeeController::class, 'index']);
Route::get('/edit/{id}',[EmployeeController::class, 'edit']);
Route::get('/show/{id}',[EmployeeController::class, 'show']);
Route::get('/create',[EmployeeController::class, 'create']);
Route::get('/store',[EmployeeController::class, 'store']);
Route::get('/update/{id}',[EmployeeController::class, 'update']);
