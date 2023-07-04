<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductVariantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('product_variants', 'name')->ignore($this->route('product_variant')),
            ],
            'description' => ['required', 'string', 'max:1000'],
            'sku' => [
                'required',
                'string',
                'size:13',
                'regex:/^[A-Z0-9]+$/',
                Rule::unique('product_variants', 'sku')->ignore($this->route('product_variant')),
            ],
            'photos' => ['required', 'max:5'],
            'photos.*' => ['mimes:jpeg,jpg,png', 'max:2048'],
            'article' => [
                'required',
                'digits:8',
                Rule::unique('product_variants', 'article')->ignore($this->route('product_variant')),
            ],
            'price' => ['required', 'numeric', 'between:0,999999.99', 'regex:/^\d+(\.\d{1,2})?$/'],
        ];
    }
}
