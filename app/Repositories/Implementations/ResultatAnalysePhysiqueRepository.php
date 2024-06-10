<?php

namespace App\Repositories\Implementations;

use App\DTOs\ResultatAnalysePhysiqueDTO;
use App\Repositories\Interfaces\ResultatAnalysePhysiqueRepositoryInterface;
use App\Models\ResultatAnalysePhysique;

class ResultatAnalysePhysiqueRepository implements ResultatAnalysePhysiqueRepositoryInterface
{

    
    public function all(){
        return ResultatAnalysePhysique::with('analyse.point_echantillonage','analyse.matiere','analyse.destination')->get();
    }

    public function store(ResultatAnalysePhysiqueDTO $data)
    {
        return ResultatAnalysePhysique::create([
            '1j' => $data->j1,
            '2j' => $data->j2,
            '7j' => $data->j7,
            '28j' => $data->j28,
            '90j' => $data->j90,
            'w1' => $data->w1,
            'w2' => $data->w2,
            'w3' => $data->w3,
            'w4' => $data->w4,
            'analyse_id' => $data->analyse_id,
        ]);
    }

    public function edit($data, $id)
    {
        $resultat_analyse_physique = ResultatAnalysePhysique::where('id',$id)->first();
         $resultat_analyse_physique->update([
            '1j' => $data['1j'] ?? 0,
            '2j' => $data['2j'] ?? 0,
            '7j' => $data['7j'] ?? 0,
            '28j' => $data['28j'] ?? 0,
            '90j' => $data['90j'] ?? 0,
            'w1' => $data['w1'] ?? 0,
            'w2' => $data['w2'] ?? 0,
            'w3' => $data['w3'] ?? 0,
            'w4' => $data['w4'] ?? 0,
            'analyse_id' => $data['analyse_id'],
        ]);
        return $resultat_analyse_physique;

    }

    public function destroy(int $id)
    {
        $resultat_analyse_physique = ResultatAnalysePhysique::findOrFail($id);
        return $resultat_analyse_physique->delete();
    }

    public function restore(int $id)
    {
        $resultat_analyse_physique = ResultatAnalysePhysique::withTrashed()->findOrFail($id);
        return $resultat_analyse_physique->restore();
    }
}
