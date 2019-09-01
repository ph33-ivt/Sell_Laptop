<?php

namespace App\Http\Requests\BackEnd;

use Illuminate\Foundation\Http\FormRequest;

class PermissionEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4',
            'display_name'=> 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'A Name is required',
            'name.min' => 'Enter name minimum 4 character',
            'display_name.required' => 'A display name is required',

        ];
    }
}
