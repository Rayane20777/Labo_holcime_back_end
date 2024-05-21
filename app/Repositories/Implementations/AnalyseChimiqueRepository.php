<?php

namespace App\Repositories\Implementations;

use App\DTOs\AnalyseChimiqueDTO;
use App\Repositories\Interfaces\AnalyseChimiqueRepositoryInterface;
use App\Models\AnalyseChimique;

class AnalyseChimiqueRepository implements AnalyseChimiqueRepositoryInterface
{

    
    public function all(){
        return AnalyseChimique::all();
    }

    public function store(AnalyseChimiqueDTO $data)
    {
        return AnalyseChimique::create([
            '2-32µm' => $data->finesse_2_32 ?? 0,
            '>45µm' => $data->finesse_45 ?? 0,
            '>80µm' => $data->finesse_80 ?? 0,
            'SSB' => $data->SSB ?? 0,
            'insoluble' => $data->insoluble ?? 0,
            'SiO2' => $data->SiO2 ?? 0,
            'Al2O3' => $data->Al2O3 ?? 0,
            'Fe2O3' => $data->Fe2O3 ?? 0,
            'CaO' => $data->CaO ?? 0, 
            'MgO' => $data->MgO ?? 0, 
            'SO3' => $data->SO3 ?? 0, 
            'K2O' => $data->K2O ?? 0, 
            'Na2O' => $data->Na2O ?? 0, 
            'P2O5' => $data->P2O5 ?? 0, 
            'CO2' => $data->CO2 ?? 0, 
            'PF' => $data->PF ?? 0, 
            'Cl' => $data->Cl ?? 0, 
            'H41' => $data->H41 ?? 0, 
            'S2-' => $data->S2 ?? 0, 
            'CaOl' => $data->CaOl ?? 0, 
            'analyse_id' => $data->analyse_id,
        ]);
    }

    public function edit($data, $id)
    {
        $analyse_chimique = AnalyseChimique::where('id',$id)->first();
         $analyse_chimique->update([
            '2-32µm' => $data->finesse_2_32 ?? 0,
            '>45µm' => $data->finesse_45 ?? 0,
            '>80µm' => $data->finesse_80 ?? 0,
            'SSB' => $data->SSB ?? 0,
            'insoluble' => $data->insoluble ?? 0,
            'SiO2' => $data->SiO2 ?? 0,
            'Al2O3' => $data->Al2O3 ?? 0,
            'Fe2O3' => $data->Fe2O3 ?? 0,
            'CaO' => $data->CaO ?? 0, 
            'MgO' => $data->MgO ?? 0, 
            'SO3' => $data->SO3 ?? 0, 
            'K2O' => $data->K2O ?? 0, 
            'Na2O' => $data->Na2O ?? 0, 
            'P2O5' => $data->P2O5 ?? 0, 
            'CO2' => $data->CO2 ?? 0, 
            'PF' => $data->PF ?? 0, 
            'Cl' => $data->Cl ?? 0, 
            'H41' => $data->H41 ?? 0, 
            'S2-' => $data->S2 ?? 0, 
            'CaOl' => $data->CaOl ?? 0, 
            'analyse_id' => $data['analyse_id'],
        ]);
        return $analyse_chimique;

    }

    public function destroy(int $id)
    {
        $analyse_chimique = AnalyseChimique::findOrFail($id);
        return $analyse_chimique->delete();
    }

    public function restore(int $id)
    {
        $analyse_chimique = AnalyseChimique::withTrashed()->findOrFail($id);
        return $analyse_chimique->restore();
    }
}
