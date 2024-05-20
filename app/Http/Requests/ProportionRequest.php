<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProportionRequest extends FormRequest
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
            'KK_G' => 'nullable|numeric',
            'CAL_G' => 'nullable|numeric',
            'CV_G' => 'nullable|numeric',
            'LAIT_G' => 'nullable|numeric',
            'KK_NG' => 'nullable|numeric',
            'CAL_NG' => 'nullable|numeric',
            'CV_NG' => 'nullable|numeric',
            'LAIT_NG' => 'nullable|numeric',
            'analyse_id' => 'required|exists:analyses,id',
        ];
    }
}
