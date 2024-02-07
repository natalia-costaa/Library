<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExemplaryRequest extends FormRequest
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
            'name' => 'required',
            'author' => 'required',
            'exemplary_type' => 'required',
            'editorial'=> 'required_without:publisher',
            'publisher' => 'rrequired_without:editorial',
        ];
    }
}
