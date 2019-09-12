<?php

namespace App\Http\Requests\BackEnd;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'password' => 'required|min:6|confirmed',
            'roles' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Enter name required',
            'name.min' => 'Enter name minimum  4 character',
            'password.required' => 'a password is required',
            'password.min' => 'Enter password minimum  4 character',
            'password.confirmed' => 'Enter password confirm same password',
            'roles.required' => 'a role is required'
        ];
    }
}
