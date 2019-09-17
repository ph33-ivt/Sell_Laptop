<?php

namespace App\Http\Requests\BackEnd;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            'name' => 'required|min:4|unique:categories,name',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'A Name is required',
            'name.min' => 'Enter name minimum 4 character',
            'name.unique' => 'a category has exists',
        ];
    }
}
