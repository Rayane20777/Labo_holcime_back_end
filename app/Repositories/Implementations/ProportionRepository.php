<?php

namespace App\Repositories\Implementations;

use App\DTOs\ProportionDTO;
use App\Models\Proportion;
use App\Repositories\Interfaces\ProportionRepositoryInterface;

class ProportionRepository implements ProportionRepositoryInterface
{
    public function all()
    {
        return Proportion::all();
    }

    public function store(ProportionDTO $data, float $gypse_sum, array $pourcentage)
    {
        return Proportion::create([
            'KK_G' => $data->KK_G,
            'CAL_G' => $data->CAL_G,
            'CV_G' => $data->CV_G,
            'LAIT_G' => $data->LAIT_G,
            'GYPSE' => $data->GYPSE,
            'KK_NG' => $pourcentage['KK_NG'],
            'CAL_NG' => $pourcentage['CAL_NG'],
            'CV_NG' => $pourcentage['CV_NG'],
            'LAIT_NG' => $pourcentage['LAIT_NG'],
            '∑_Gypse' => $gypse_sum,
            'analyse_id' => $data->analyse_id,
        ]);
    }

    public function edit($data,int $id, float $gypse_sum, array $pourcentage)
    {
        $proportion = Proportion::where('id',$id)->first();

        $proportion->KK_G = $data['KK_G'];
        $proportion->KK_G = $data['KK_G'];
        $proportion->KK_G = $data['KK_G'];
        $proportion->KK_G = $data['KK_G'];
        $proportion->KK_G = $data['KK_G'];
        $proportion->KK_G = $data['KK_G'];
        $proportion->KK_G = $data['KK_G'];
        $proportion->KK_G = $data['KK_G'];
        $proportion->KK_G = $data['KK_G'];
        $proportion->update([
            'KK_G' => $data->KK_G,
            'CAL_G' => $data->CAL_G,
            'CV_G' => $data->CV_G,
            'LAIT_G' => $data->LAIT_G,
            'GYPSE' => $data->GYPSE,
            'KK_NG' => $pourcentage['KK_NG'],
            'CAL_NG' => $pourcentage['CAL_NG'],
            'CV_NG' => $pourcentage['CV_NG'],
            'LAIT_NG' => $pourcentage['LAIT_NG'],
            'sum_gypse' => $gypse_sum,
            'analyse_id' => $data->analyse_id,
        ]);

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
