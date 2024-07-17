<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        $rules = [
           'name' => [
            'required',
            'string',
            'max:200'
           ],

           'slug' =>[
            'required',
            'string',
            'max:200'
           ],

           'description' =>[
            'required'
             
           ],

           'image' =>[
            'nullable',
            'mimes:jpeg,jpg,png,svg,webp'
           ],

           'meta_title' =>[
            'nullable',
            'string',
            'max:200'
           ],

           'meta_description' =>[
            'nullable',
            'string',
            'max:200'
           ],

           'meta_keyword' =>[
            'nullable',
            'string',
            'max:200'
           ],

        ];
        return $rules;
    }
}
