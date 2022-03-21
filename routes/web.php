<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
});


Route::get('article', function() {
    return view('article');
});

Route::get('contact', function() {
    return view('contact');
});


Route::get('blog/create', 'ArticlesController@create');
Route::post('stored', 'ArticlesController@store'); //forgot what this was for i think to help trigger the store method in the controller
Route::get('blog/back/{page}', 'ArticlesController@back'); //this is only used for the footer in the blog section. For the link Contact Us. Thinking about erasing the whole footer in the blog section.
Route::get('blog/{blog}', 'ArticlesController@index');


Route::get('blog/displayArticle/{article}', 'ArticlesController@show');
Route::get('blog/displayArticle/back/{article}', 'ArticlesController@back'); //didn't know how to go back ask nick. This is just temporary
Route::get('blog/displayArticle/addComment/back/{article}', 'ArticlesController@back');
Route::get('blog/displayArticle/addComment/{article}', 'CommentsController@create');
Route::post('blog/displayArticle/addComment/{article}', 'CommentsController@store'); //forgot what this was for i think to help trigger the store method in the controller




Auth::routes();

Route::get('/home', 'HomeController@index');
