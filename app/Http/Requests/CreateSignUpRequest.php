<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateSignUpRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|numeric|unique:users',
            'Password-retype' => 'required|same:password'
        ];
    }
}
