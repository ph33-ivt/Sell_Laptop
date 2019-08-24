<?php

namespace App\Http\Requests\BackEnd;

use Illuminate\Foundation\Http\FormRequest;

class UserAddRequest extends FormRequest
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
            'email'=> 'required|max:35|email',
            'password' => 'required|min:6',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Enter name required',
            'name.min' => 'phải nhập tên tối thiểu 4 ký tự',
            'email.email' => 'Email phải nhập kiểu email ',
            'email.required' => 'Bắt buộc nhập Email',
            'email.max' => 'Nhập email tối đa 35 ký tự',
            'password.required' => 'Bắt buộc nhập password',
            'password.min' => 'Nhập password tối thiểu 6 ký tự',

        ];
    }
}
