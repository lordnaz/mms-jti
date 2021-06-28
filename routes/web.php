<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JtiController;
use App\Http\Controllers\MyTaskController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\HomeController;

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
        return redirect('home');
    }else{
        // return view('auth.login');
        return redirect('login');
    }
});

Route::get('/dashboard', function () {
    return redirect('home');
});


// Route::get('/jti', function () {
//     return view('components.jti-form');
// })->name('jti');

// Route::post('test', JtiController);
// Route::get('/jti', [JtiController::class, 'getAllUser'])->name('jti_form');
Route::get('/jti/{quote_no}', [JtiController::class, 'getAllUser'])->where('quote_no', '.*')->name('jti_form');
// Route::get('/create_jti/{job_id}', [JtiController::class, 'getAllUser'])->where('job_id', '.*')->name('jti_form');

Route::post('/submit_jti', [JtiController::class, 'submitForm']);


// Route::middleware(['auth:sanctum', 'verified'])->get('/team', function () {
//     return view('components.team');
// })->name('team');
Route::get('/team', [TeamController::class, 'index'])->name('team');


Route::get('/mytask', [MyTaskController::class, 'index'])->name('mytask');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/jti_actual/{jti_no}', function () {
//     // return view('components.jti-actual');
//     // return view('components.jti-actual', compact('jti_no'));
// })->name('jti_actual');

Route::get('/jti_actual/{jti_no}', [JtiController::class, 'goToJtiActual'])->name('jti_actual');

// Route::get('/test', [JtiController::class, 'test'])->name('test');