<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('home');

    }

    public function getAbout()
    {
        return view('about');

    }

    public function getRegister()
    {
        return view('signup');

    }
}
