<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=> 'required|max:35|email',
            'password' => 'required|min:4',

        ];
    }
    public function messages()
    {
        return [
            'email.email' => 'Enter email style email',
            'email.required' => 'a email is required',
            'email.max' => 'Enter email maximum 35 character',
            'password.required' => 'password is required',
            'password.min' => 'Enter password minimum 4 character ',
        ];
    }
}
