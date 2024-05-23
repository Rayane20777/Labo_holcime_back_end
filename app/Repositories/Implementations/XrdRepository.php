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
        Displacement: $data['Displacement'],
        Alite_CS: $data['Alite_CS'],
        R_wp: $data['R_wp'],
        FA_Sum: $data['FA_Sum'],
        Clinker: $data['Clinker'],
        fCaO_XRD: $data['fCaO_XRD'],
        Alite_Sum: $data['Alite_Sum'],
        Belite_Sum: $data['Belite_Sum'],
        Alum_Sum: $data['Alum_Sum'],
        Ferrite: $data['Ferrite'],
        Gypse: $data['Gypse'],
        CALCAIRE: $data['CALCAIRE'],
        SO3: $data['SO3'],
        Mullite: $data['Mullite'],
        Quartz: $data['Quartz'],
        Magnetite: $data['Magnetite'],
        Hematite: $data['Hematite'],
        Flyash_amorph: $data['Flyash_amorph'],
        Alite_M1: $data['Alite_M1'],
        Alite_M3: $data['Alite_M3'],
        Fraction_M1: $data['Fraction_M1'],
        R_exp: $data['R_exp'],
        Alite_PO: $data['Alite_PO'],
        Belite_alpha: $data['Belite_alpha'],
        Belite_alpha_H: $data['Belite_alpha_H'],
        Belite_beta: $data['Belite_beta'],
        Belite_gamma: $data['Belite_gamma'],
        Alum_cubic: $data['Alum_cubic'],
        Alum_ortho: $data['Alum_ortho'],
        Lime: $data['Lime'],
        Portlandite: $data['Portlandite'],
        Periclase: $data['Periclase'],
        Arcanite: $data['Arcanite'],
        Aphthitalite: $data['Aphthitalite'],
        Langbeinite: $data['Langbeinite'],
        Gypsum: $data['Gypsum'],
        Hemi_Hydrate: $data['Hemi_Hydrate'],
        Anhydrite: $data['Anhydrite'],
        SO3_XRD: $data['SO3_XRD'],
        CO2_XRD: $data['CO2_XRD'],
        Syngenite: $data['Syngenite'],
        Calcite: $data['Calcite'],
        Dolomite: $data['Dolomite'],
            'analyse_id' => $data->analyse_id,
        ]);
    }

    public function edit($data, $id)
    {
        $xrd = Xrd::where('id',$id)->first();
        $xrd->update([
            'SiO2' => $data['SiO2'] ?? 0,
            'Al2O3' => $data['Al2O3'] ?? 0,
            'Fe2O3' => $data['Fe2O3'] ?? 0,
            'CaO' => $data['CaO'] ?? 0, 
            'MgO' => $data['MgO'] ?? 0, 
            'SO3' => $data['SO3'] ?? 0, 
            'K2O' => $data['K2O'] ?? 0, 
            'Na2O' => $data['Na2O'] ?? 0, 
            'P2O5' => $data['P2O5'] ?? 0, 
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
