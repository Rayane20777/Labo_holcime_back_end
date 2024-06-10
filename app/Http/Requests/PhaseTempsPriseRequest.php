<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhaseTempsPriseRequest extends FormRequest
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
            'mass_volumique' => 'nullable|numeric',
            'debut_de_prise' => 'nullable|numeric',
            'fin_de_prise' => 'nullable|numeric',
            'expention' => 'nullable|numeric',
            'eau_gach' => 'nullable|numeric',
            'analyse_id' => 'required|int',
        ];
    }
}
