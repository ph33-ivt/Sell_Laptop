<?php

namespace App\Http\Requests\BackEnd;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'name' => 'required|min:4',
            'email'=> 'required|max:35|email|unique:users,email',
            'password' => 'required|min:6',
            'roles' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'a name is required',
            'name.min' => 'Enter name minimum  4 character',
            'email.unique' => 'a email has exists',
            'email.email' => 'Enter email style email ',
            'email.required' => 'a email is required',
            'email.max' => 'Enter name maximum 35 character',
            'password.required' => 'a password is required',
            'password.min' => 'Enter password minimum  4 character',
            'roles.required' => 'a role is required',
            'phone.required' => 'a phone is required',
            'address.required' => 'a address is required'
        ];
    }
}
