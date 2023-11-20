<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('index');
})->name('index');

Route::get('/createOrder', function () {
    return view('createOrder');
})->name('createOrder');

Route::get('/equipment', function(){
    return view('equipment');
})->name('equipment');




Route::get('login', [AuthController::class, 'Auth'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'Registr'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/admin_profile', function(){
    return view('admin_profile');
})->name('admin_profile');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');




Route::get('/appelation', function(){
    return view('appelation');
})->name('appelation');
Route::get('/appelation_def', function(){
    return view('appelation_def');
})->name('appDef');




Route::get('/records_list', function(){
    return view('records_list');
})->name('records_list');