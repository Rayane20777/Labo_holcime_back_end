<?php

namespace App\Repositories\Implementations;

use App\DTOs\AnalyseChimiqueDTO;
use App\Repositories\Interfaces\AnalyseChimiqueRepositoryInterface;
use App\Models\AnalyseChimique;

class AnalyseChimiqueRepository implements AnalyseChimiqueRepositoryInterface
{

    
    public function all(){
        return AnalyseChimique::with('analyse.point_echantillonage','analyse.matiere','analyse.destination')->get();
    }

    public function store(AnalyseChimiqueDTO $data)
    {
        return AnalyseChimique::create([
            '2-32µm' => $data->finesse_2_32 ?? 0,
            '>45µm' => $data->finesse_45 ?? 0,
            '>80µm' => $data->finesse_80 ?? 0,
            'SSB' => $data->SSB ?? 0,
            'insoluble' => $data->insoluble ?? 0,
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
