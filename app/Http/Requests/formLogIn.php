<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formLogIn extends FormRequest
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
            'email'=>'bail|required|email',
            'password'=>'bail|required|min:6'
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Bạn chưa nhập email !', 
            'email.email'=>'Bạn phải nhập đúng chuẩn email !', 
            'password.required'=>'Bạn chưa nhập password !', 
            'password.min'=>'Password phải có ít nhất 6 kí tự !', 
        ];
    }
}
