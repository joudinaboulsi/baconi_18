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


Route::get('/','PagesController@home')->name('homePage');
Route::get('/about-us','PagesController@about')->name('aboutPage');
Route::get('/services','PagesController@services')->name('servicePage');
Route::get('/service-details','PagesController@serviceDetails')->name('serviceDetailPage');

Route::get('/blogs','PagesController@blog')->name('blogPage');
Route::get('/blog-details','PagesController@blogDetail')->name('blogDetailPage');
Route::get('/companies','PagesController@companies')->name('companiesPage');
Route::get('/our-team','PagesController@team')->name('teamPage');
Route::get('/contact-us','PagesController@contact')->name('contactPage');
Route::get('/careers','PagesController@careers')->name('careerPage');