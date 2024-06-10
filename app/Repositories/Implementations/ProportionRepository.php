<?php

namespace App\Repositories\Implementations;

use App\DTOs\ProportionDTO;
use App\Models\Proportion;
use App\Repositories\Interfaces\ProportionRepositoryInterface;

class ProportionRepository implements ProportionRepositoryInterface
{
    public function all()
    {
        return Proportion::with('analyse.point_echantillonage','analyse.matiere','analyse.destination')->get();
    }

    public function store(ProportionDTO $data, float $gypse_sum, array $pourcentage)
    {
        return Proportion::create([
            'KK_G' => $data->KK_G  ?? 0,
            'CAL_G' => $data->CAL_G ?? 0,
            'CV_G' => $data->CV_G ?? 0,
            'LAIT_G' => $data->LAIT_G ?? 0,
            'GYPSE' => $data->GYPSE ?? 0,
            'KK_NG' => $pourcentage['KK_NG'] ?? 0,
            'CAL_NG' => $pourcentage['CAL_NG'] ?? 0,
            'CV_NG' => $pourcentage['CV_NG'] ?? 0,
            'LAIT_NG' => $pourcentage['LAIT_NG'] ?? 0,
            '∑_Gypse' => $gypse_sum ?? 0,
            'analyse_id' => $data->analyse_id,
        ]);
    }

    public function edit($data,int $id, float $gypse_sum, array $pourcentage)
    {
        $proportion = Proportion::where('id',$id)->first();
         
         $proportion->KK_G = $data['KK_G'] ?? 0;
        $proportion->CAL_G = $data['CAL_G']?? 0;
        $proportion->CV_G = $data['CV_G'] ?? 0;
        $proportion->LAIT_G = $data['LAIT_G'] ?? 0;
        $proportion->GYPSE = $data['GYPSE'] ?? 0;
        $proportion->KK_NG = $pourcentage['KK_NG'] ?? 0;
        $proportion->CAL_NG = $pourcentage['CAL_NG'] ?? 0;
        $proportion->CV_NG = $pourcentage['CV_NG'] ?? 0;
        $proportion->LAIT_NG = $pourcentage['LAIT_NG'] ?? 0;
        $proportion->∑_Gypse = $gypse_sum;
        $proportion->analyse_id = $data['analyse_id'] ?? 0;
        $proportion->update();
        
        return $proportion;
    }

    public function destroy(int $id)
    {
        $proportion = Proportion::findOrFail($id);
        return $proportion->delete();
    }

    public function restore(int $id)
    {
        $proportion = Proportion::withTrashed()->findOrFail($id);
        return $proportion->restore();
    }
}
