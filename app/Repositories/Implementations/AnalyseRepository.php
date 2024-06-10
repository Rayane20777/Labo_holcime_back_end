<?php
namespace App\Repositories\Implementations;

use App\DTOs\AnalyseDTO;
use App\Repositories\Interfaces\AnalyseRepositoryInterface;
use App\Models\Analyse;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;
use Illuminate\Database\Eloquent\Builder;

class AnalyseRepository implements AnalyseRepositoryInterface
{
    public function all(){
        return Analyse::with('destination','point_echantillonage','matiere')->get();
    }

    public function store(AnalyseDTO $data)
    {
        return Analyse::create([
            'date_prelevement' => $data->date_prelevement,
            'date_gachage' => $data->date_gachage,
            'status' => $data->status,
            'matiere_id' => $data->matiere_id,
            'destination_id' => $data->destination_id,
            'point_echantillonage_id' => $data->point_echantillonage_id,
            'user_id' => $data->user_id, 
        ]);
    }

    public function edit($data, int $id)
    {
        $analyse = Analyse::where('id', $id)->first();
        $analyse->date_prelevement = $data['date_prelevement'];
        $analyse->date_gachage = $data['date_gachage'];
        $analyse->status = $data['status'];
        $analyse->matiere_id = $data['matiere_id'];
        $analyse->destination_id = $data['destination_id'];
        $analyse->point_echantillonage_id = $data['point_echantillonage_id'];
        $analyse->update();

        return $analyse;
    }

    public function lockAnalyse(int $id)
    {
        $analyse = Analyse::where('id',$id)->first();
        $analyse->status = 'locked';
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

    // public function filter(array $filters)
    // {
    //     $query = QueryBuilder::for(Analyse::class)
    //         ->allowedFilters([
    //             AllowedFilter::exact('destination_id'),
    //             AllowedFilter::exact('point_echantillonage_id'),
    //             'date_prelevement',
    //             'date_gachage',
                
    //         ])->with(['destination', 'point_echantillonage']);



    //         if (isset($filters['destination_id'])) {
    //             $query->where('destination_id', $filters['destination_id']);
    //         }
    
    //         if (isset($filters['point_echantillonage_id'])) {
    //             $query->where('point_echantillonage_id', $filters['point_echantillonage_id']);
    //         }


    //         if (isset($filters['date_prelevement'])) {
    //             $query->where('date_prelevement', $filters['date_prelevement']);
    //         }
    
    //         if (isset($filters['date_gachage'])) {
    //             $query->where('date_gachage', $filters['date_gachage']);
    //         }
    
    //         if (empty($filters)) {
    //             return collect();
    //         }

    //     return $query->get();
    // }
    
}
