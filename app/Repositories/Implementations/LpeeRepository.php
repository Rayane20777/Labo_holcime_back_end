<?php

namespace App\Repositories\Implementations;

use App\DTOs\LpeeDTO;
use App\Repositories\Interfaces\LpeeRepositoryInterface;
use App\Models\Lpee;

class LpeeRepository implements LpeeRepositoryInterface
{
    public function all(){
        return Lpee::with('analyse.point_echantillonage', 'analyse.matiere', 'analyse.destination')->get();
    }

    public function store(LpeeDTO $data)
    {
        return Lpee::create([
            'P_AF' => $data->P_AF,
            'SO3' => $data->SO3,
            'SiO2' => $data->SiO2,
            'Fe2O3' => $data->Fe2O3,
            'Al2O3' => $data->Al2O3,
            'CaO' => $data->CaO,
            'MgO' => $data->MgO,
            'Cl' => $data->Cl,
            'Na2O' => $data->Na2O,
            'K2O' => $data->K2O,
            'insoluble' => $data->insoluble,
            'regulateur_de_prise' => $data->regulateur_de_prise,
            'ajout_calcaire' => $data->ajout_calcaire,
            'teneur_en_pouzzolane' => $data->teneur_en_pouzzolane,
            'clinker' => $data->clinker,
            'laitier' => $data->laitier,
            'sulfures' => $data->sulfures,
            'perte_au_feu_500' => $data->perte_au_feu_500,
            'analyse_id' => $data->analyse_id,
        ]);
    }

    public function edit($data, $id)
    {
        $lpee = Lpee::where('id', $id)->first();
        $lpee->update([
            'P_AF' => $data['P_AF'] ?? null,
            'SO3' => $data['SO3'] ?? null,
            'SiO2' => $data['SiO2'] ?? null,
            'Fe2O3' => $data['Fe2O3'] ?? null,
            'Al2O3' => $data['Al2O3'] ?? null,
            'CaO' => $data['CaO'] ?? null,
            'MgO' => $data['MgO'] ?? null,
            'Cl' => $data['Cl'] ?? null,
            'Na2O' => $data['Na2O'] ?? null,
            'K2O' => $data['K2O'] ?? null,
            'insoluble' => $data['insoluble'] ?? null,
            'regulateur_de_prise' => $data['regulateur_de_prise'] ?? null,
            'ajout_calcaire' => $data['ajout_calcaire'] ?? null,
            'teneur_en_pouzzolane' => $data['teneur_en_pouzzolane'] ?? null,
            'clinker' => $data['clinker'] ?? null,
            'laitier' => $data['laitier'] ?? null,
            'sulfures' => $data['sulfures'] ?? null,
            'perte_au_feu_500' => $data['perte_au_feu_500'] ?? null,
            'analyse_id' => $data['analyse_id'],
        ]);
        return $lpee;
    }

    public function destroy(int $id)
    {
        $lpee = Lpee::findOrFail($id);
        return $lpee->delete();
    }

    public function restore(int $id)
    {
        $lpee = Lpee::withTrashed()->findOrFail($id);
        return $lpee->restore();
    }
}
