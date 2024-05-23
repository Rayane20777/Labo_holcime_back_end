<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnalyseChimiqueRequest extends FormRequest
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
            'finesse_2_32' => 'nullable|numeric',
            'finesse_45' => 'nullable|numeric',
            'finesse_80' => 'nullable|numeric',
            'SSB' => 'nullable|numeric',
            'insoluble' => 'nullable|numeric',
            'CO2' => 'nullable|numeric',
            'PF' => 'nullable|numeric',
            'Cl' => 'nullable|numeric',
            'H41' => 'nullable|numeric',
            'S2' => 'nullable|numeric',
            'CaOl' => 'nullable|numeric',
            'analyse_id' => 'required|int',
        ];
    }
}
