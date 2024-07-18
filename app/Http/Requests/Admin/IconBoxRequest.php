<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class IconBoxRequest extends FormRequest
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
        $rules = [
            'box_image' => [
                'nullable',
                'mimes:jpg,jpeg,png,svg,webp'
            ],
            'box_text' => [
                'nullable',
                
            ],
            'box_description' => [
                'nullable',
                
            ]
        ];
        return $rules;
    }
}
