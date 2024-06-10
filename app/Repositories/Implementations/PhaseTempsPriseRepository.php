<?php

namespace App\Repositories\Implementations;

use App\DTOs\PhaseTempsPriseDTO;
use App\Repositories\Interfaces\PhaseTempsPriseRepositoryInterface;
use App\Models\PhaseTempsPrise;

class PhaseTempsPriseRepository implements PhaseTempsPriseRepositoryInterface
{

    
    public function all(){
        return PhaseTempsPrise::with('analyse.point_echantillonage','analyse.matiere','analyse.destination')->get();
    }

    public function store(PhaseTempsPriseDTO $data)
    {
        return PhaseTempsPrise::create([
            'mass_volumique' => $data->mass_volumique,
            'debut_de_prise' => $data->debut_de_prise,
            'fin_de_prise' => $data->fin_de_prise,
            'expention' => $data->expention,
            'eau_gach' => $data->eau_gach,
            'analyse_id' => $data->analyse_id,
        ]);
    }

    public function edit($data, $id)
    {
        $phase_temps_prise = PhaseTempsPrise::where('id',$id)->first();
        $phase_temps_prise->mass_volumique = $data['mass_volumique'];
        $phase_temps_prise->debut_de_prise = $data['debut_de_prise'];
        $phase_temps_prise->fin_de_prise = $data['fin_de_prise'];
        $phase_temps_prise->expention = $data['expention'];
        $phase_temps_prise->eau_gach = $data['eau_gach'];
        $phase_temps_prise->analyse_id = $data['analyse_id'];
        $phase_temps_prise->update();

        return $phase_temps_prise;
    }

    public function destroy(int $id)
    {
        $phase_temps_prise = PhaseTempsPrise::findOrFail($id);
        return $phase_temps_prise->delete();
    }

    public function restore(int $id)
    {
        $phase_temps_prise = PhaseTempsPrise::withTrashed()->findOrFail($id);
        return $phase_temps_prise->restore();
    }
}
