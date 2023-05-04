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

Route::match(['get','post'], '/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'master'], function () {
    // User Routes
    Route::get('/user', [App\Http\Controllers\Master\UserController::class, 'index'])->name('user.index');
    Route::match(['get','post'], '/user/logout',[App\Http\Controllers\Master\UserController::class, 'logout'])->name('user.logout');

    Route::get('/question', [App\Http\Controllers\QuestionController::class, 'index'])->name('question.index');
    Route::get('/question/create', [App\Http\Controllers\QuestionController::class, 'create'])->name('question.create');
    Route::post('/question/submit', [App\Http\Controllers\QuestionController::class, 'submit'])->name('question.submit');
    Route::get('/question/edit/{id}', [App\Http\Controllers\QuestionController::class, 'edit'])->name('question.edit');
    Route::post('/question/update', [App\Http\Controllers\QuestionController::class, 'update'])->name('question.update');

});