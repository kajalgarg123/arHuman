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

Route::post('comments', 'CommentController@storeComments')->name('add.comment')->middleware('web');
Route::post('addresume' , 'ResumeController@store')->name('add.resume');

Route::get('/' , 'PagesController@home');
Route::get('about-us' , 'PagesController@aboutus');
Route::get('clinical' , 'PagesController@clinical');
Route::get('counterfeit' , 'PagesController@counterfeit');
Route::get('spc-language' , 'PagesController@spclanguage');
Route::get('team' , 'PagesController@team');
Route::get('faq' , 'PagesController@faq');
Route::get('blog' , 'PagesController@blog');
Route::get('career' , 'PagesController@career');
Route::get('blank' , 'PagesController@blank');
Route::get('privacy_policy' , 'PagesController@privacy_policy');
Route::get('terms-condition' , 'PagesController@term_condition');

Auth::routes();

// Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/admin-dashboard', 'Admin\AdminController@index')->name('dashboard');
Route::get('spc/download', 'Admin\SpcPdfsController@getDownload');
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {
    Route::get('/comments-list', 'CommentController@index' );
    Route::get('team/create', 'Admin\TeamController@create' );
    Route::get('team/show/{id}', 'Admin\TeamController@show' );
    Route::post('team/add' , 'Admin\TeamController@store')->name('add.team');
    Route::put('team/update/{id}' , 'Admin\TeamController@update')->name('update.team');
    Route::get('team/index' , 'Admin\TeamController@index')->name('team.index');
    Route::get('team/edit/{id}' , 'Admin\TeamController@edit');
    Route::delete('team/delete/{id}' , 'Admin\TeamController@destroy');
    Route::resource('spc', 'Admin\SpcPdfsController');
});



