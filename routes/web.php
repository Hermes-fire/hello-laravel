<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;


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

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('hello/{prenom}', function($prenom) {
    echo "<hr>Bonjour $prenom <hr>";
});
Route::get('cv', function () {
    return view('cv');
});
Route::view('call', "cv");
Route::get('login', [LoginController::class, 'login']);
Route::post('verify', [LoginController::class, 'verify']); */

Route::resource('products', ProductController::class);
Route::resource('customers', CustomerController::class);



