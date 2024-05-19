<?php

namespace App\Repositories\Implementations;

use App\DTOs\MatiereDTO;
use App\Repositories\Interfaces\MatiereRepositoryInterface;
use App\Models\Matiere;

class MatiereRepository implements MatiereRepositoryInterface
{
    public function store(MatiereDTO $data)
    {
        return Matiere::create([
            'nom' => $data->nom,
        ]);
    }

    public function edit(MatiereDTO $data)
    {
        $matiere = Matiere::findOrFail($data->id);
        $matiere->nom = $data->nom;
        $matiere->save();

        return $matiere;
    }

    public function destroy(int $id)
    {
        $matiere = Matiere::findOrFail($id);
        return $matiere->delete();
    }
}
