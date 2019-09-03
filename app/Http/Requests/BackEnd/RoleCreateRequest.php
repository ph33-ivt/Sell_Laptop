<?php

namespace App\Http\Requests\BackEnd;

use Illuminate\Foundation\Http\FormRequest;

class RoleCreateRequest extends FormRequest
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
            'description'=> 'required',
            'permissions' => 'required',


        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'a name is required',
            'name.min' => 'Enter name minimum  4 character',
            'description.required' => 'a description is required',
            'permissions.required' => 'a permission is required',
        ];
    }
}
