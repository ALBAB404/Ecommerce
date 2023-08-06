<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ["required","unique:products,name"],
            'price' => ["required"],
            'selling_price' => ["required"],
            'category_id' => ["required"],
            'sub_category_id' => ["required"],
            'status' => ["required"],
            'is_featured' => ["required"],
            'long_desc' => ["required"],
            'short_desc' => ["required"],
            'image' => ["required"],
            'slider_images' => ["required"],
        ];
    }
}