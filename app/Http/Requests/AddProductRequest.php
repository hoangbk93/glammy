<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            //
            'product_name'=>'required',
            'product_price'=>'required',
            'product_color'=>'required',
            'product_img'=>'required|image'
        ];
    }
    public function messages(){
        return [
            'product_name.required'=>'Tên không được để trống',
            'product_price.required'=>'Giá sản phẩm không được để trống',
            'product_color.required'=>'Màu sản phẩm không được để trống',
        ];
    }
}
