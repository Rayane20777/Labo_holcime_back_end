<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class XrfRequest extends FormRequest
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
            'SiO2' => 'nullable|numeric',
            'Al2O3' => 'nullable|numeric',
            'Fe2O3' => 'nullable|numeric',
            'CaO' => 'nullable|numeric',
            'MgO' => 'nullable|numeric',
            'SO3' => 'nullable|numeric',
            'K2O' => 'nullable|numeric',
            'Na2O' => 'nullable|numeric',
            'P2O5' => 'nullable|numeric',
            'analyse_id' => 'reqCuired|int',
        ];
    }
}
