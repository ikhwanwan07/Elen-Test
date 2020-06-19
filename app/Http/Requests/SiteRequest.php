<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteRequest extends FormRequest
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
            'nama' => 'required',
            'price' => 'required|numeric',

        ];
    }
    public function messages()
    {
        return [
            'nama.required' => 'Nama Harus diisi',
            'price.required' => 'Price Harus diisi',
            'price.numeric' => 'Price Harus angka bro',
        ];
    }
}
