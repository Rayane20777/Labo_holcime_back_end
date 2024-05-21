<?php
namespace App\Repositories\Implementations;

use App\DTOs\AnalyseDTO;
use App\Repositories\Interfaces\AnalyseRepositoryInterface;
use App\Models\Analyse;
use Illuminate\Support\Facades\Auth;

class AnalyseRepository implements AnalyseRepositoryInterface
{
    public function all(){
        return Analyse::all();
    }

    public function store(AnalyseDTO $data)
    {
        return Analyse::create([
            'date_prelevement' => $data->date_prelevement,
            'date_gachage' => $data->date_gachage,
            'matiere_id' => $data->matiere_id,
            'destination_id' => $data->destination_id,
            'point_echantillonage_id' => $data->point_echantillonage_id,
            'user_id' => Auth::id(), 
        ]);
    }

    public function edit($data, int $id)
    {
        $analyse = Analyse::where('id', $id)->first();
        $analyse->date_prelevement = $data['date_prelevement'];
        $analyse->date_gachage = $data['date_gachage'];
        $analyse->matiere_id = $data['matiere_id'];
        $analyse->destination_id = $data['destination_id'];
        $analyse->point_echantillonage_id = $data['point_echantillonage_id'];
        $analyse->update();

        return $analyse;
    }

    public function destroy(int $id)
    {
        $analyse = Analyse::findOrFail($id);
        return $analyse->delete();
    }

    public function restore(int $id)
    {
        $analyse = Analyse::withTrashed()->findOrFail($id);
        return $analyse->restore();
    }
}
