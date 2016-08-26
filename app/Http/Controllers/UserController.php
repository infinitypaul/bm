<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSignUpRequest;
use App\Http\Requests\CreateUpdateRequest;
use App\Http\Requests\UpdateRequest;
use App\User;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('dashboard', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSignUpRequest $request)
    {
        //
        $user = new User;
        $user->username = $request->username;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->ipaddress = $_SERVER['REMOTE_ADDR'];
        $user->Save();
        $request->session()->flash('success', 'You have been registered Successfully, Please Login');
        //return view('signup');
        return \Redirect::to('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateUpdateRequest $request, $id)
    {
        $user = User::findorFail($id);
        if ($request->has('email')) $user->email = $request->input('email');
        if ($request->has('mobile')) $user->mobile_number = $request->input('Mobile_Number');
        if ($request->has('password')) $user->password = Hash::make($request->input('password'));
         $user->location = Uploadcare::getFile($request->input('image'))->getUrl();
        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
