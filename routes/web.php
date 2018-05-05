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
// });




Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');


Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::get('/posts/tags/{tag}', 'TagsController@index');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::post('/login', 'SessionsController@store');
Route::get('/login', 'SessionsController@create')->name('login');
Route::get('/logout', 'SessionsController@destroy');


// to test vus js 
Route::get('/vuejs', function(){
    return ['vue', 'laravel', 'php', 'bootstrap', 'javascript'];
});

Route::get('/vuetest', function(){
    return view('posts.vuetest');
});








