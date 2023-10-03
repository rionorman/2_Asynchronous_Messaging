<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SendEmail;

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


Auth::routes(['register' => false, 'login' => false]);

Route::get('/', function () {
  return view('welcome');
});

Route::get('/home', function () {
  return view('welcome');
});

Route::get('/formemail', [SendEmail::class, 'formEmail']);
Route::post('/sendemail', [SendEmail::class, 'sendEmail']);
