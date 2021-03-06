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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [
        'as' => 'landingPage.index',
        'uses' => 'LandingPageController@index'
    ]);
});

Auth::routes();

Route::get('/logout', function () {
    \Auth::logout();
    return redirect('/');
})->name('logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

//landing-page
include 'landingPage.php';

//user
include 'user.php';

//university
include 'university.php';

//resume
include 'resume.php';

//companies
include 'companies.php';

//test
include 'test.php';

//jobs
include 'jobs.php';

//candidates
include 'candidates.php';