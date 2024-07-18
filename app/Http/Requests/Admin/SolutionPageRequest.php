<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SolutionPageRequest extends FormRequest
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
    public function rules(): array
    {
        $rules =  [
            'name' => [
                'required',
                'string'
            ],
            'slug' => [
                'required',
                'string'
            ],
            'titletext' => [
                'nullable',
                'string'
            ],
            'description' => [
               'nullable',
            ],
            'imageone' => [
                'nullable',
                'mimes:jpg,jpeg,png,svg,webp'
            ],
            'imagesecond' => [
                'nullable',
                'mimes:jpg,jpeg,png,svg,webp'
            ],
            'descriptiontwo' => [
                'nullable',
                
            ],
            'titletextsecond' => [
                'nullable',
                'string'
            ],
            'icon_box_id' =>[
                'nullable',
                'string'
            ],          

            'descriptionsecond' => [
                'nullable',
               
            ],
            'breadcumimage' => [
                'nullable',
                'mimes:jpg,jpeg,png,svg,webp'
            ],
            'meta_title' => [
                'nullable',
                'string'
            ],
            'meta_description' => [
                'nullable',
            ],
            'meta_keyword' => [
                'nullable',
                'string'
            ],
           
            
        ];
        return $rules;
    }
}
