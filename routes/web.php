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

Route::get('/', ['as' => 'root', 'uses' => 'HomeController@index']);

Route::get('article/{articleSlug}', ['as' => 'article', 'uses' => 'ArticleController@index']);
Route::get('page/{pageSlug}', ['as' => 'page', 'uses' => 'PageController@index']);
Route::get('category/{categorySlug}', ['as' => 'category', 'uses' => 'CategoryController@index']);
Route::get('sitemap.xml', ['as' => 'sitemap', 'uses' => 'SiteMapController@index']);

Route::post('language/change', ['as' => 'app.language.change' , 'uses' => 'LanguageController@postChange']);
