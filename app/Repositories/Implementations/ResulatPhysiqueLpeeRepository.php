<?php

namespace App\Repositories\Implementations;

use App\DTOs\ResulatPhysiqueLpeeDTO;
use App\Repositories\Interfaces\ResulatPhysiqueLpeeRepositoryInterface;
use App\Models\ResulatPhysiqueLpee;

class ResulatPhysiqueLpeeRepository implements ResulatPhysiqueLpeeRepositoryInterface
{

    
    public function all(){
        return ResulatPhysiqueLpee::with('analyse.point_echantillonage','analyse.matiere','analyse.destination')->get();
    }

    public function store(ResulatPhysiqueLpeeDTO $data)
    {
        return ResulatPhysiqueLpee::create([
            '1j_lpee' => $data->j1_lpee,
            '2j_lpee' => $data->j2_lpee,
            '7j_lpee' => $data->j7_lpee,
            '28j_lpee' => $data->j28_lpee,
            '90j_lpee' => $data->j90_lpee,
            // 'w1' => $data->w1,
            // 'w2' => $data->w2,
            // 'w3' => $data->w3,
            // 'w4' => $data->w4,
            'analyse_id' => $data->analyse_id,
        ]);
    }

    public function edit($data, $id)
    {
        $resultat_analyse_physique = ResulatPhysiqueLpee::where('id',$id)->first();
         $resultat_analyse_physique->update([
            '1j_lpee' => $data['1j_lpee'] ?? 0,
            '2j_lpee' => $data['2j_lpee'] ?? 0,
            '7j_lpee' => $data['7j_lpee'] ?? 0,
            '28j_lpee' => $data['28j_lpee'] ?? 0,
            '90j_lpee' => $data['90j_lpee'] ?? 0,
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
        $resultat_analyse_physique = ResulatPhysiqueLpee::findOrFail($id);
        return $resultat_analyse_physique->delete();
    }

    public function restore(int $id)
    {
        $resultat_analyse_physique = ResulatPhysiqueLpee::withTrashed()->findOrFail($id);
        return $resultat_analyse_physique->restore();
    }
}
