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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard', function () {
        return view('index');
    })->name('dashboard');
    Route::resource('question', 'QuestionController',['except' => ['index', 'show']]);
    Route::resource('answer', 'AnswerController',['only' => ['store']]);
    Route::resource('reply', 'ReplyController',['only' => ['store']]);
    Route::resource('tag', 'TagController',['except' => ['index']]);
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/question', 'QuestionController@index')->name('question.index');
Route::get('/question/{question}', 'QuestionController@show')->name('question.show');
Route::get('/tag', 'TagController@index')->name('tag.index');
