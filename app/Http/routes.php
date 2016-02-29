<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
App::bind('repositories\blogInterface','repositories\queryBuilder\blog');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

	Route::group(['middleware' => 'web'], function ()
	{
		Route::get('/', "blogController@index");

		Route::get('login',function() {return view('auth.login');});
		Route::post('login', "loginController@checkLogin");

		Route::get('viewBlog/{id?}',"blogController@viewBlog");
		Route::post('viewBlog/{id?}',"blogController@viewBlog");



		Route::group(['middleware' => 'auth'], function ()
		{
			Route::post('insertComment/{id}',"blogController@insertComment");

			Route::group(['middleware' => 'multiUser'], function ()
			{
				Route::get('admin',"adminController@index");

				Route::post('search',"adminController@search");

				Route::get('insertBlog',function(){ return view("insertBlog"); });
				Route::post('insertBlog',"blogController@insertBlog");

				Route::get('updateBlog/{id?}','adminController@updateBlog');
				Route::post('update/{id?}','adminController@update');

				Route::get('deleteBlog/{id?}','adminController@delete');
			});
			Route ::get('error',function(){ return view('errors.503 ');});
			Route::get('logout',"loginController@logout" );
		});
	});
