<?php

namespace App\Repositories\Implementations;

use App\DTOs\DestinationDTO;
use App\Models\Destination;
use App\Repositories\Interfaces\DestinationRepositoryInterface;

class DestinationRepository implements DestinationRepositoryInterface
{
    public function all()
    {
        return Destination::all();
    }
    
    public function store(DestinationDTO $data)
    {
        return Destination::create([
            'nom' => $data->nom,
            'matiere_id' => $data->matiere_id,
        ]);
    }

    public function edit($data,int $id)
    {
        $destination = Destination::where('id',$id)->first();
        $destination->nom = $data['nom'];
        $destination->nom = $data['matiere_id'];
        $destination->save();

        return $destination;
    }

    public function destroy(int $id)
    {
        $destination = Destination::findOrFail($id);
        return $destination->delete();
    }

    public function restore(int $id)
    {
        $destination = Destination::withTrashed()->findOrFail($id);
        return $destination->restore();
    }

}
