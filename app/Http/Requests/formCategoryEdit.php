<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formCategoryEdit extends FormRequest
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
          'name'=>'bail|required|unique:category,name,'.$this->segment(4).',id',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Bạn chưa nhập tên danh mục !',
            'name.unique'=>'Tên danh mục đã được sử dụng !',
        ];
    }
}
