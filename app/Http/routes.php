<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'front', 'uses' => 'ArticleController@index']);
Route::get('/article/{article}', ['as' => 'show', 'uses' => 'ArticleController@show']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'AdminHomeController@index']);

    Route::resource('article', 'AdminArticleController');
    Route::resource('category', 'AdminCategoryController');

    Route::get('comment', ['as' => 'admin.comment.index', 'uses' => 'AdminCommentController@index']);

});

Route::get('comment/create', ['as' => 'comment.create', 'uses' => 'CommentController@create']);
Route::post('comment/{article_id}', ['as' => 'comment.store', 'uses' => 'CommentController@store']);