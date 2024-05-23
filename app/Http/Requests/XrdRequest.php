<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class XrdRequest extends FormRequest
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
            'Displacement'=> 'nullable|numeric',
        'Alite_CS'=> 'nullable|numeric',
        'R_wp'=> 'nullable|numeric',
        'FA_Sum'=> 'nullable|numeric',
        'Clinker'=> 'nullable|numeric',
        'fCaO_XRD'=> 'nullable|numeric',
        'Alite_Sum'=> 'nullable|numeric',
        'Belite_Sum'=> 'nullable|numeric',
        'Alum_Sum'=> 'nullable|numeric',
        'Ferrite'=> 'nullable|numeric',
        'Gypse'=> 'nullable|numeric',
        'CALCAIRE'=> 'nullable|numeric',
        'SO3'=> 'nullable|numeric',
        'Mullite'=> 'nullable|numeric',
        'Quartz'=> 'nullable|numeric',
        'Magnetite'=> 'nullable|numeric',
        'Hematite'=> 'nullable|numeric',
        'Flyash_amorph'=> 'nullable|numeric',
        'Alite_M1'=> 'nullable|numeric',
        'Alite_M3'=> 'nullable|numeric',
        'Fraction_M1'=> 'nullable|numeric',
        'R_exp'=> 'nullable|numeric',
        'Alite_PO'=> 'nullable|numeric',
        'Belite_alpha'=> 'nullable|numeric',
        'Belite_alpha_H'=> 'nullable|numeric',
        'Belite_beta'=> 'nullable|numeric',
        'Belite_gamma'=> 'nullable|numeric',
        'Alum_cubic'=> 'nullable|numeric',
        'Alum_ortho'=> 'nullable|numeric',
        'Lime'=> 'nullable|numeric',
        'Portlandite'=> 'nullable|numeric',
        'Periclase'=> 'nullable|numeric',
        'Arcanite'=> 'nullable|numeric',
        'Aphthitalite'=> 'nullable|numeric',
        'Langbeinite'=> 'nullable|numeric',
        'Gypsum'=> 'nullable|numeric',
        'Hemi_Hydrate'=> 'nullable|numeric',
        'Anhydrite'=> 'nullable|numeric',
        'SO3_XRD'=> 'nullable|numeric',
        'CO2_XRD'=> 'nullable|numeric',
        'Syngenite'=> 'nullable|numeric',
        'Calcite'=> 'nullable|numeric',
        'Dolomite'=> 'nullable|numeric',
        'analyse_id' => 'reqCuired|int',
    ];
    }
}
