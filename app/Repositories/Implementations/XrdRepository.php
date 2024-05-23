<?php

namespace App\Repositories\Implementations;

use App\DTOs\XrdDTO;
use App\Repositories\Interfaces\XrdRepositoryInterface;
use App\Models\Xrd;

class XrdRepository implements XrdRepositoryInterface
{

    
    public function all(){
        return Xrd::all();
    }

    public function store(XrdDTO $data)
    {
        return Xrd::create([
        'Displacement' => $data->Displacement ?? 0,
        'Alite_CS' => $data->Alite_CS ?? 0,
        'R_wp' => $data->R_wp ?? 0,
        'FA_Sum' => $data->FA_Sum ?? 0,
        'Clinker' => $data->Clinker ?? 0,
        'fCaO_XRD' => $data->fCaO_XRD ?? 0,
        'Alite_Sum' => $data->Alite_Sum ?? 0,
        'Belite_Sum' => $data->Belite_Sum ?? 0,
        'Alum_Sum' => $data->Alum_Sum ?? 0,
        'Ferrite' => $data->Ferrite ?? 0,
        'Gypse' => $data->Gypse ?? 0,
        'CALCAIRE' => $data->CALCAIRE ?? 0,
        'SO3' => $data->SO3 ?? 0,
        'Mullite' => $data->Mullite ?? 0,
        'Quartz' => $data->Quartz ?? 0,
        'Magnetite' => $data->Magnetite ?? 0,
        'Hematite' => $data->Hematite ?? 0,
        'Flyash_amorph' => $data->Flyash_amorph ?? 0,
        'Alite_M1' => $data->Alite_M1 ?? 0,
        'Alite_M3' => $data->Alite_M3 ?? 0,
        'Fraction_M1' => $data->Fraction_M1 ?? 0,
        'R_exp' => $data->R_exp ?? 0,
        'Alite_PO' => $data->Alite_PO ?? 0,
        'Belite_alpha' => $data->Belite_alpha ?? 0,
        'Belite_alpha_H' => $data->Belite_alpha_H ?? 0,
        'Belite_beta' => $data->Belite_beta ?? 0,
        'Belite_gamma' => $data->Belite_gamma ?? 0,
        'Alum_cubic' => $data->Alum_cubic ?? 0,
        'Alum_ortho' => $data->Alum_ortho ?? 0,
        'Lime' => $data->Lime ?? 0,
        'Portlandite' => $data->Portlandite ?? 0,
        'Periclase' => $data->Periclase ?? 0,
        'Arcanite' => $data->Arcanite ?? 0,
        'Aphthitalite' => $data->Aphthitalite ?? 0,
        'Langbeinite' => $data->Langbeinite ?? 0,
        'Gypsum' => $data->Gypsum ?? 0,
        'Hemi_Hydrate' => $data->Hemi_Hydrate ?? 0,
        'Anhydrite' => $data->Anhydrite ?? 0,
        'SO3_XRD' => $data->SO3_XRD ?? 0,
        'CO2_XRD' => $data->CO2_XRD ?? 0,
        'Syngenite' => $data->Syngenite ?? 0,
        'Calcite' => $data->Calcite ?? 0,
        'Dolomite' => $data->Dolomite ?? 0,
        'analyse_id' => $data->analyse_id,
        ]);
    }

    public function edit($data, $id)
    {
        $xrd = Xrd::where('id',$id)->first();
        $xrd->update([
            'Displacement' => $data->Displacement ?? 0,
        'Alite_CS' => $data->Alite_CS ?? 0,
        'R_wp' => $data->R_wp ?? 0,
        'FA_Sum' => $data->FA_Sum ?? 0,
        'Clinker' => $data->Clinker ?? 0,
        'fCaO_XRD' => $data->fCaO_XRD ?? 0,
        'Alite_Sum' => $data->Alite_Sum ?? 0,
        'Belite_Sum' => $data->Belite_Sum ?? 0,
        'Alum_Sum' => $data->Alum_Sum ?? 0,
        'Ferrite' => $data->Ferrite ?? 0,
        'Gypse' => $data->Gypse ?? 0,
        'CALCAIRE' => $data->CALCAIRE ?? 0,
        'SO3' => $data->SO3 ?? 0,
        'Mullite' => $data->Mullite ?? 0,
        'Quartz' => $data->Quartz ?? 0,
        'Magnetite' => $data->Magnetite ?? 0,
        'Hematite' => $data->Hematite ?? 0,
        'Flyash_amorph' => $data->Flyash_amorph ?? 0,
        'Alite_M1' => $data->Alite_M1 ?? 0,
        'Alite_M3' => $data->Alite_M3 ?? 0,
        'Fraction_M1' => $data->Fraction_M1 ?? 0,
        'R_exp' => $data->R_exp ?? 0,
        'Alite_PO' => $data->Alite_PO ?? 0,
        'Belite_alpha' => $data->Belite_alpha ?? 0,
        'Belite_alpha_H' => $data->Belite_alpha_H ?? 0,
        'Belite_beta' => $data->Belite_beta ?? 0,
        'Belite_gamma' => $data->Belite_gamma ?? 0,
        'Alum_cubic' => $data->Alum_cubic ?? 0,
        'Alum_ortho' => $data->Alum_ortho ?? 0,
        'Lime' => $data->Lime ?? 0,
        'Portlandite' => $data->Portlandite ?? 0,
        'Periclase' => $data->Periclase ?? 0,
        'Arcanite' => $data->Arcanite ?? 0,
        'Aphthitalite' => $data->Aphthitalite ?? 0,
        'Langbeinite' => $data->Langbeinite ?? 0,
        'Gypsum' => $data->Gypsum ?? 0,
        'Hemi_Hydrate' => $data->Hemi_Hydrate ?? 0,
        'Anhydrite' => $data->Anhydrite ?? 0,
        'SO3_XRD' => $data->SO3_XRD ?? 0,
        'CO2_XRD' => $data->CO2_XRD ?? 0,
        'Syngenite' => $data->Syngenite ?? 0,
        'Calcite' => $data->Calcite ?? 0,
        'Dolomite' => $data->Dolomite ?? 0,
            'analyse_id' => $data['analyse_id'],
        ]);
        return $xrd;

    }

    public function destroy(int $id)
    {
        $xrd = Xrd::findOrFail($id);
        return $xrd->delete();
    }

    public function restore(int $id)
    {
        $xrd = Xrd::withTrashed()->findOrFail($id);
        return $xrd->restore();
    }
}
