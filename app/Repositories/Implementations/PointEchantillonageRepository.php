<?php

namespace App\Repositories\Implementations;

use App\DTOs\PointEchantillonageDTO;
use App\Models\PointEchantillonage;
use App\Repositories\Interfaces\PointEchantillonageRepositoryInterface;

class PointEchantillonageRepository implements PointEchantillonageRepositoryInterface
{
    public function all()
    {
        return PointEchantillonage::with('matiere')->get();
    }
    
    public function store(PointEchantillonageDTO $data)
    {
        return PointEchantillonage::create([
            'nom' => $data->nom,
            'matiere_id' => $data->matiere_id,
        ]);
    }

    public function edit($data, int $id)
    {
        $destination = PointEchantillonage::where('id',$id)->first();
        $destination->nom = $data['nom'];
        $destination->matiere_id = $data['matiere_id'];
        $destination->update();

        return $destination;
    }

    public function destroy(int $id)
    {
        $destination = PointEchantillonage::findOrFail($id);
        return $destination->delete();
    }

    public function restore(int $id)
    {
        $destination = PointEchantillonage::withTrashed()->findOrFail($id);
        return $destination->restore();
    }

}
