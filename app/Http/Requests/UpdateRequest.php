<?php

namespace App\Http\Requests;
use Auth;

use App\Http\Requests\Request;

class UpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'min:6',
            'email' => 'email|unique:users',
            'number' => 'numeric',
            'repassword' => 'same:password',
            'image' => 'image|mimes:jpeg,jpg,bmp,png,gif',
        ];
    }
}
