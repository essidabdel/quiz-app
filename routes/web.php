<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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



Route::get('/quiz/{category}', [QuizController::class, 'index'])->name('quiz');

Route::post('/quiz/validate', [QuizController::class, 'validateResult'])->name('validate-result');

//Route::get('quiz/validate', function () {
    //return view('validate'); })->name('validate');

Route::get('/', function () {
    return view('home');
});
