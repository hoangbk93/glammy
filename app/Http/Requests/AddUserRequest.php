<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddUserRequest extends FormRequest
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
            'name'=>'required',
            'user'=>'required',
            'email'=>'required|email',
            'pass'=>'required|min:3|max:32'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Ten khong duoc de trong',
            'user.required'=>'Tai khoan khong duoc de trong',
            'email.required'=>'Email khong duoc de trong',
            'email.email'=>'Rmail khong duoc hop le',
            'pass.required'=>'Mat khau khong duoc de trong',
            'pass.min'=>'Mat khau khong duoc duoi 3 ki tu',
            'pass.max'=>'Mat khau khong duoc lon hon 32 ki tu'
        ];
    }
}
