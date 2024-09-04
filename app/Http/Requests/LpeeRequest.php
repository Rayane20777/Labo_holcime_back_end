<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LpeeRequest extends FormRequest
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
            'P_AF' => 'nullable|string',
            'SO3' => 'nullable|string',
            'SiO2' => 'nullable|string',
            'Fe2O3' => 'nullable|string',
            'Al2O3' => 'nullable|string',
            'CaO' => 'nullable|string',
            'MgO' => 'nullable|string',
            'Cl' => 'nullable|string',
            'Na2O' => 'nullable|string',
            'K2O' => 'nullable|string',
            'insoluble' => 'nullable|string',
            'regulateur_de_prise' => 'nullable|string',
            'ajout_calcaire' => 'nullable|string',
            'teneur_en_pouzzolane' => 'nullable|string',
            'clinker' => 'nullable|string',
            'laitier' => 'nullable|string',
            'sulfures' => 'nullable|string',
            'perte_au_feu_500' => 'nullable|string',
            'analyse_id' => 'required|int',
            
        ];
    }
}
