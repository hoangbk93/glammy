<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' =>'required|email',
            'pass'=>'required|min:3|max:32'
        ];
    }
    public function messages(){
        return [
            'email.required'=>'Email không được để trống',
            'email.email'=>'Email không hợp lệ',
            'pass.required'=>'mật khẩu không được để trống',
            'email.min'=>'mật khẩu không được dưới 3 kí tự',
            'email.max'=>'mật khẩu không được nhiều hơn 32 kí tự'
        ];
    }
}
