<?php

namespace App\Repositories\Implementations;

use App\DTOs\MatiereDTO;
use App\Repositories\Interfaces\MatiereRepositoryInterface;
use App\Models\Matiere;

class MatiereRepository implements MatiereRepositoryInterface
{

    
    public function all(){
        return Matiere::all();
    }

    public function matiereFilter(int $matiereId)
    {
        $matiere = Matiere::with([
            'analyses',
            'analyses.destination',
            'analyses.point_echantillonage',
            'analyses.analyse_chimique',
            'analyses.proportion',
            'analyses.phase_gachage',
            'analyses.phase_temps_prise',
            'analyses.resultat_analyse_physique',
            'analyses.lpee'
        ])->findOrFail($matiereId);
    
        return $matiere;
    }

    public function store(MatiereDTO $data)
    {
        return Matiere::create([
            'nom' => $data->nom,
        ]);
    }

    public function edit($data, $id)
    {
        $matiere = Matiere::where('id',$id)->first();
        $matiere->nom = $data['nom'];
        $matiere->update();

        return $matiere;
    }

    public function destroy(int $id)
    {
        $matiere = Matiere::findOrFail($id);
        return $matiere->delete();
    }

    public function restore(int $id)
    {
        $matiere = Matiere::withTrashed()->findOrFail($id);
        return $matiere->restore();
    }
}
