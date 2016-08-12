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

Route::get('/', array('as'=>'home', function () {
    return view('home');
}));

Route::get('/contactus', array('as'=>'contact',function () {
    return view('contact');
}));

Route::get('/aboutus', array('as'=>'about', function () {
    return view('about');
}));

Route::get('/quiz', array('as'=>'quiz',function () {
    return view('quiz');
}));

Route::get('/pricing', array('as'=>'pricing', function () {
    return view('pricing');
}));

Route::get('/howitwork', array('as'=>'howitwork',function () {
    return view('how_it_works');
}));

Route::get('/features', array('as'=>'features',function () {
    return view('features');
}));

Route::get('/signup', array('as'=>'signup',function () {
    return view('signup');
}));

Route::get('/login', array('as'=>'login',function () {
    return view('login');
}));

Route::get('/dashboard', array('as'=>'dash',function () {
    return view('dashboard');
}));

Route::get('/courses', array('as'=>'courses',function () {
    return view('courses');
}));

Route::get('/howtoengage', array('as'=>'engage',function () {
    return view('howtoengage');
}));

Route::get('/blank', array('as'=>'blank',function () {
    return view('blank');
}));