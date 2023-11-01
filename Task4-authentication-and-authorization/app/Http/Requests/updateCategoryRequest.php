<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class updateCategoryRequest extends FormRequest
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
        return [
            // "name" => "required|unique:categories|min:4"
            "name" => ["required", Rule::unique('categories')->ignore($this->category), "min:4"]
        ];
    }

    function messages()
    {
        return [
            "name.required" => "category name is required",
            "name.min" => "category name must be at least 4 characters",
            "name.unique" => "this category name is already taken"
        ];
    }
}
