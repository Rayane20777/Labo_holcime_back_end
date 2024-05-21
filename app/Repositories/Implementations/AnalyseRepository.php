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
            'user_id' => $data->user_id, 
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

    public function filter(array $filters)
{
    $query = Analyse::query();

    // Apply filters for select inputs
    if (isset($filters['destination_id'])) {
        $query->where('destination_id', $filters['destination_id']);
    }
    
    if (isset($filters['point_echantillonage_id'])) {
        $query->where('point_echantillonage_id', $filters['point_echantillonage_id']);
    }

    // Apply search filters for date_prelevement and date_gachage
    if (isset($filters['date_prelevement'])) {
        $query->where('date_prelevement', 'like', "%{$filters['date_prelevement']}%");
    }

    if (isset($filters['date_gachage'])) {
        $query->where('date_gachage', 'like', "%{$filters['date_gachage']}%");
    }

    // Get the filtered analyses
    $analyses = $query->get();

    // If no analyses are found, return an empty collection
    if ($analyses->isEmpty()) {
        return collect();
    }

    // Return the filtered analyses
    return $analyses;
}

    
}
