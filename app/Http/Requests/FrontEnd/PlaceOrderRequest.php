<?php

namespace App\Http\Requests\FrontEnd;

use Illuminate\Foundation\Http\FormRequest;

class PlaceOrderRequest extends FormRequest
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
            'country' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'country.required' => 'A country is required',
            'firstname.required' => 'A firstname is required',
            'lastname.required' => 'A lastname is required',
            'address.required' => 'A address is required',
            'city.required' => 'A city is required',
            'phone.required' => 'A phone is required',
        ];
    }
}
