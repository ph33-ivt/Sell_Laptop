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
            'password' => 'required|min:6',

        ];
    }
    public function messages()
    {
        return [
            'email.email' => 'phải nhập kiểu email có @',
            'email.required' => 'Bắt buộc nhập tên',
            'email.max' => 'Nhập tối đa 35 ký tự',
            'password.required' => 'Bắt buộc nhập password',
            'password.min' => 'Nhập tối thiểu 6 ký tự',
        ];
    }
}
