<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
//1-do sth in route
Route::get('/hello', function () {
    return 'hello world';
});

//2-call view in route
Route::get('/welcome ', function () {
    return view('welcome');
});

//3-Call Controller function
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])-> name('home');

//4-Root->Controller->View
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
