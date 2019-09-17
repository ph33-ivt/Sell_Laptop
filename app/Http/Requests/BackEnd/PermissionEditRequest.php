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
            'name' => 'required|min:4|unique:permissions,name',
            'display_name'=> 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'A Name is required',
            'name.min' => 'Enter name minimum 4 character',
            'display_name.required' => 'A display name is required',
            'name.unique' =>'a permission exists '

        ];
    }
}
