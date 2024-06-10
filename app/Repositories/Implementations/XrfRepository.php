<?php

namespace App\Repositories\Implementations;

use App\DTOs\XrfDTO;
use App\Repositories\Interfaces\XrfRepositoryInterface;
use App\Models\Xrf;

class XrfRepository implements XrfRepositoryInterface
{

    
    public function all(){
        return Xrf::with('analyse.point_echantillonage','analyse.matiere','analyse.destination')->get();
    }

    public function store(XrfDTO $data)
    {
        return Xrf::create([
            'SiO2' => $data->SiO2 ?? 0,
            'Al2O3' => $data->Al2O3 ?? 0,
            'Fe2O3' => $data->Fe2O3 ?? 0,
            'CaO' => $data->CaO ?? 0, 
            'MgO' => $data->MgO ?? 0, 
            'SO3' => $data->SO3 ?? 0, 
            'K2O' => $data->K2O ?? 0, 
            'Na2O' => $data->Na2O ?? 0, 
            'P2O5' => $data->P2O5 ?? 0, 
            'analyse_id' => $data->analyse_id,
        ]);
    }

    public function edit($data, $id)
    {
        $xrf = Xrf::where('id',$id)->first();
        $xrf->update([
            'SiO2' => $data['SiO2'] ?? 0,
            'Al2O3' => $data['Al2O3'] ?? 0,
            'Fe2O3' => $data['Fe2O3'] ?? 0,
            'CaO' => $data['CaO'] ?? 0, 
            'MgO' => $data['MgO'] ?? 0, 
            'SO3' => $data['SO3'] ?? 0, 
            'K2O' => $data['K2O'] ?? 0, 
            'Na2O' => $data['Na2O'] ?? 0, 
            'P2O5' => $data['P2O5'] ?? 0, 
            'analyse_id' => $data['analyse_id'],
        ]);
        return $xrf;

    }

    public function destroy(int $id)
    {
        $xrf = Xrf::findOrFail($id);
        return $xrf->delete();
    }

    public function restore(int $id)
    {
        $xrf = Xrf::withTrashed()->findOrFail($id);
        return $xrf->restore();
    }
}
