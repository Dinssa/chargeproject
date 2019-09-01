<?php

use Spatie\Sitemap\SitemapGenerator;

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

Route::get('/', function () { return view('welcome'); });
Route::get('/about', 'PageController@getAbout')->name('page.about');
Route::get('/research', 'PageController@getResearch')->name('page.research');
Route::get('/funding', 'PageController@getFunding')->name('page.funding');
Route::get('/future', 'PageController@getFuture')->name('page.future');
Route::get('/contact', 'PageController@getContact')->name('page.getintouch');
Route::get('/policy', 'PageController@getPolicy')->name('page.policy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/sitemap', function(){
	SitemapGenerator::create('http://chargeproject.org')->writeToFile('sitemap.xml');
	return 'Sitemap created.';
});
