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

    public function store(ProportionDTO $data, float $gypse)
    {
        return Proportion::create([
            'KK_G' => $data->KK_G,
            'CAL_G' => $data->CAL_G,
            'CV_G' => $data->CV_G,
            'LAIT_G' => $data->LAIT_G,
            'GYPSE' => $gypse,
            'KK_NG' => $data->KK_NG,
            'CAL_NG' => $data->CAL_NG,
            'CV_NG' => $data->CV_NG,
            'LAIT_NG' => $data->LAIT_NG,
            'analyse_id' => $data->analyse_id,
        ]);
    }

    public function edit(ProportionDTO $data, float $gypse)
    {
        $proportion = Proportion::findOrFail($data->id);
        $proportion->update([
            'KK_G' => $data->KK_G,
            'CAL_G' => $data->CAL_G,
            'CV_G' => $data->CV_G,
            'LAIT_G' => $data->LAIT_G,
            'GYPSE' => $gypse,
            'KK_NG' => $data->KK_NG,
            'CAL_NG' => $data->CAL_NG,
            'CV_NG' => $data->CV_NG,
            'LAIT_NG' => $data->LAIT_NG,
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
