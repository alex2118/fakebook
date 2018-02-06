<?php

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
  Route::get('/', 'PostController@index')->name('post.index');
  Route::post('/new-post', 'PostController@store')->name('post.store');
  Route::post('/new-comment/{post}', 'CommentController@store')->name('comment.store');
  Route::post('/new-reply/{comment}', 'ReplyController@store')->name('reply.store');
  Route::get('/profile/{user}', 'UserController@profile')->name('user.profile');
});
