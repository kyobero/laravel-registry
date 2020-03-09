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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        $article = App\Article::latest()->get()
    ]);
    
    // return $article;
    // return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/verifyland', function () {
    return view('verifyland');
});

Route::get('/verify_lands/create', function () {
    return view('verify_lands.create');
});

Route ::get ('/Lands', function () {
    return view('Lands.index', [
        'Land_verification'=> App\Lands::latest()->get()
    ]);
});

//Get verified_lands  
Route ::get ('/verified_land', function () {
    return view('verified_land', [
        $verify_land = App\Verify_land::latest()->get()
    ]);
});

// Route::get('/lands', 'LandsController@index');
// Route::get('/lands/create', 'LandsController@create');
// Route::get('/Lands/{Land}', 'LandsController@show');

Route::get('/verifylands', 'verify_landsController@index');
Route::post('/verify_lands', 'verify_landsController@store');
Route::get('/verifylands/create', 'verify_landsController@create');
Route::get('/verifylands/{Land}', 'verify_landsController@show');