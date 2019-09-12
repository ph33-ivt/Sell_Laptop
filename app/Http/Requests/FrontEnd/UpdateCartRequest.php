<?php

namespace App\Http\Requests\FrontEnd;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCartRequest extends FormRequest
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
            'quantity' => 'required|min:1|integer',
        ];
    }
    public function messages()
    {
        return [
            'quantity.required' => 'A quantity is required',
            'quantity.min' => 'A quantity minimum 1',
            'quantity.integer' => 'A quantity must be an integer',
        ];
    }
}
