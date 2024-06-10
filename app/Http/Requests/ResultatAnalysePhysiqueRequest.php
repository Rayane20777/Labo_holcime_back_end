<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResultatAnalysePhysiqueRequest extends FormRequest
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
            '1j' => 'nullable|numeric',
            '2j' => 'nullable|numeric',
            '7j' => 'nullable|numeric',
            '28j' => 'nullable|numeric',
            '90j' => 'nullable|numeric',
            'w1' => 'nullable|numeric',
            'w2' => 'nullable|numeric',
            'w3' => 'nullable|numeric',
            'w4' => 'nullable|numeric',
            'analyse_id' => 'required|int',
        ];
    }
}
