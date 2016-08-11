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

Route::get('/', function () {
    return view('home');
});

Route::get('/contactus', function () {
    return view('contact');
});

Route::get('/aboutus', array('as'=>'about', function () {
    return view('about');
}));

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/howitwork', function () {
    return view('how_it_works');
});

Route::get('/features', function () {
    return view('features');
});