<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhaseGachageRequest extends FormRequest
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
            'temperature' => 'nullable|numeric',
            'temperature_salle' => 'nullable|numeric',
            'humidite' => 'nullable|numeric',
            'p_prisme' => 'nullable|numeric',
            'temps_gachage' => 'nullable|string',
            'temps_casse' => 'nullable|string',
        ];
    }
}
