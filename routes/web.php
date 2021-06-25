<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JtiController;

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
    if(auth()->user()){
        return redirect('dashboard');
    }else{
        // return view('auth.login');
        return redirect('login');
    }
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/jti', function () {
    return view('components.jti-form');
})->name('jti');


Route::middleware(['auth:sanctum', 'verified'])->get('/team', function () {
    return view('components.team');
})->name('team');
