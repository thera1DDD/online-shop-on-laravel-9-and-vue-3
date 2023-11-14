<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username'=>'nullable',
            'phone_number'=>'nullable',
            'product_name'=>'nullable',
            'price'=> 'nullable',
            'quantity'=>'nullable',
            'subtotal'=>'nullable',
            'total'=>'nullable'
        ];
    }
}
