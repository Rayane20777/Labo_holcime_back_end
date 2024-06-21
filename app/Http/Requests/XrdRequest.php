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
        'GOF'=> 'nullable|numeric',
        'R_wp'=> 'nullable|numeric',
        'R_exp'=> 'nullable|numeric',
        'Displacement'=> 'nullable|numeric',
        'Alite_M3'=> 'nullable|numeric',
        'Alite_M1'=> 'nullable|numeric',
        'Alite_Sum'=> 'nullable|numeric',
        'Fraction_M1'=> 'nullable|numeric',
        'Alite_CS'=> 'nullable|numeric',
        'Alite_PO'=> 'nullable|numeric',
        'Belite_beta'=> 'nullable|numeric',
        'Belite_alpha'=> 'nullable|numeric',
        'Belite_alpha_H'=> 'nullable|numeric',
        'Belite_gamma'=> 'nullable|numeric',
        'Belite_Sum'=> 'nullable|numeric',
        'Alum_cubic'=> 'nullable|numeric',
        'Alum_ortho'=> 'nullable|numeric',
        'Alum_mono'=> 'nullable|numeric',
        'Alum_Sum'=> 'nullable|numeric',
        'Ferrite'=> 'nullable|numeric',
        'Lime'=> 'nullable|numeric',
        'Portlandite'=> 'nullable|numeric',
        'fCaO_XRD'=> 'nullable|numeric',
        'Periclase'=> 'nullable|numeric',
        'Quartz'=> 'nullable|numeric',
        'Arcanite'=> 'nullable|numeric',
        'Thenardite'=> 'nullable|numeric',
        'Langbeinite'=> 'nullable|numeric',
        'Aphthitalite'=> 'nullable|numeric',
        'Gypsum'=> 'nullable|numeric',
        'Hemi_Hydrate'=> 'nullable|numeric',
        'Anhydrite'=> 'nullable|numeric',
        'Calcite'=> 'nullable|numeric',
        'Dolomite'=> 'nullable|numeric',
        'Mullite'=> 'nullable|numeric',
        'Magnetite'=> 'nullable|numeric',
        'Hematite'=> 'nullable|numeric',
        'Flyash_amorph'=> 'nullable|numeric',
        'FA_Sum'=> 'nullable|numeric',
        'Syngenite'=> 'nullable|numeric',
        'Albite'=> 'nullable|numeric',
        'Anorthite'=> 'nullable|numeric',
        'Andesine'=> 'nullable|numeric',
        'K_Feldspar'=> 'nullable|numeric',
        'Illite'=> 'nullable|numeric',
        'Feldspar_Sum'=> 'nullable|numeric',
        'SO3_XRD'=> 'nullable|numeric',
        'CO2_XRD'=> 'nullable|numeric',
        'analyse_id' => 'required|int',
    ];
    }
}
