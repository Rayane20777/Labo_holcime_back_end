<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnalyseRequest extends FormRequest
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
            'date_prelevement' => "required|date",
            'date_gachage' => "date|nullable",
            'matiere_id' => 'required',
            'point_echantillonage_id' => 'required',
            'destination_id' => 'required',
            'user_id' => 'required'

        ];
    }
}
