<?php

namespace App\Repositories\Implementations;

use App\DTOs\PhaseGachageDTO;
use App\Repositories\Interfaces\PhaseGachageRepositoryInterface;
use App\Models\PhaseGachage;

class PhaseGachageRepository implements PhaseGachageRepositoryInterface
{

    
    public function all(){
        return PhaseGachage::with('analyse.point_echantillonage','analyse.matiere','analyse.destination')->get();
    }

    public function store(PhaseGachageDTO $data)
    {
        return PhaseGachage::create([
            'temperature' => $data->temperature,
            'temperature_salle' => $data->temperature_salle,
            'humidite' => $data->humidite,
            'p_prisme' => $data->p_prisme,
            'temps_gachage' => $data->temps_gachage,
            'temps_casse' => $data->temps_casse,
            'analyse_id' => $data->analyse_id,
        ]);
    }

    public function edit($data, $id)
    {
        $phase_gachage = PhaseGachage::where('id',$id)->first();
        $phase_gachage->temperature = $data['temperature'];
        $phase_gachage->temperature_salle = $data['temperature_salle'];
        $phase_gachage->humidite = $data['humidite'];
        $phase_gachage->p_prisme = $data['p_prisme'];
        $phase_gachage->temps_gachage = $data['temps_gachage'];
        $phase_gachage->temps_casse = $data['temps_casse'];
        $phase_gachage->analyse_id = $data['analyse_id'];
        $phase_gachage->update();

        return $phase_gachage;
    }

    public function destroy(int $id)
    {
        $phase_gachage = PhaseGachage::findOrFail($id);
        return $phase_gachage->delete();
    }

    public function restore(int $id)
    {
        $phase_gachage = PhaseGachage::withTrashed()->findOrFail($id);
        return $phase_gachage->restore();
    }
}
