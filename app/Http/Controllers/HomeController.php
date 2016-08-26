<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

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

    public function getLogin()
    {
        return view('login');

    }



    public function postLogin(Login $request)
    {

        $credentials = $request->only('username', 'password');
        $username = Input::get('username');
      $password =  $request->password;
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }
        $request->session()->flash('success', 'Unable To Login');
        return \Redirect::to('login');
    }
}
