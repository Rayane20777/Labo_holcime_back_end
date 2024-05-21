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
            'j1' => 'nullable|numeric',
            'j2' => 'nullable|numeric',
            'j7' => 'nullable|numeric',
            'j28' => 'nullable|numeric',
            'j90' => 'nullable|numeric',
            'w1' => 'nullable|numeric',
            'w2' => 'nullable|numeric',
            'w3' => 'nullable|numeric',
            'w4' => 'nullable|numeric',
            'analyse_id' => 'required|int',
        ];
    }
}
