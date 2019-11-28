<?php

namespace App\Http\Requests\BackEnd;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
            'category_id' => 'required',
            'name' => 'required|min:4',
            'description'=> 'required',
            'price' => 'required|numeric',
            'color' => 'required',
            'weight' => 'required',
            'cpu' => 'required',
            'ram' => 'required',
            'hdd' => 'required',
            'os' => 'required',
            'card' => 'required',
            'quantity' => 'required|integer',
            'image' => 'required|image'
        ];
    }
    public function messages()
    {
        return [
            'category_id.required' => 'A Category is required',
            'name.required' => 'A Name is required',
            'name.min' => 'Enter name minimum 4 character',
            'description.required' => 'A display name is required',
            'price.required' => 'A price is required',
            'price.numeric' => 'Enter price must style number',
            'color.required' => 'A color is required',
            'weight.required' => 'A weight is required',
            'cpu.required' => 'A cpu is required',
            'ram.required' => 'A ram is required',
            'hdd.required' => 'A hdd is required',
            'os.required' => 'A os is required',
            'card.required' => 'A card is required',
            'quantity.required' => 'A quantity is required',
            'quantity.integer' => 'Enter quantity must is style integer',
            'image.required' => 'A image is required',
            'image.image' => 'Choose file style image ',
        ];
    }
}
