<?php

use App\Http\Controllers\PassingsController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\QuizController;
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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('quiz/run/', function () {
//    return view('quizes.index');
//});

//Route::post('quiz/run/',[QuizController::class, 'create']);
Route::get('quiz/run/',[QuizController::class, 'index']);
Route::post('/api/answer/{questionId}/',[QuestionsController::class, 'isCorrect']);
