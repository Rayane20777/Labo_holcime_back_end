<?php

namespace App\Services\Implementations;

use App\DTOs\ProportionDTO;
use App\Exceptions\ProportionNotFoundException;
use App\Repositories\Interfaces\ProportionRepositoryInterface;
use App\Services\Interfaces\ProportionServiceInterface;
use App\Models\Proportion;

class ProportionService implements ProportionServiceInterface
{
    private ProportionRepositoryInterface $repository;

    public function __construct(ProportionRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    private function calculateGypseSum(ProportionDTO $data): float
    {
        return ($data->KK_G ?? 0) + ($data->CAL_G ?? 0) + ($data->CV_G ?? 0) + ($data->LAIT_G ?? 0) + ($data->GYPSE ?? 0);
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function store(ProportionDTO $data)
    {
        $gypse_sum = $this->calculateGypseSum($data);
        $pourcentage = $this->calculateNutrientPercentages($data);
        return $this->repository->store($data, $gypse_sum, $pourcentage);
    }

    public function edit($data, int $id)
    {

        
        $pourcentage = $this->calculatePercentagesEdit($data);
        $gypse_sum = $this->calculateGypseSumEdit($data);
        return $this->repository->edit($data, $id, $gypse_sum, $pourcentage);
    }

    public function destroy(int $id)
    {
        $proportion = Proportion::find($id);
        if (!$proportion) {
            throw new ProportionNotFoundException();
        }

        return $this->repository->destroy($id);
    }

    public function restore(int $id)
    {
        $proportion = Proportion::withTrashed()->find($id);
        if (!$proportion) {
            throw new ProportionNotFoundException();
        }

        return $this->repository->restore($id);
    }

    
    private function calculateMaterial_KK_NG(float $KK_G, float $GYPSE): float
    {
        return $KK_G / (100 - $GYPSE) * 100;
    }

    private function calculateMaterial_CAL_NG(float $CAL_G, float $GYPSE): float
    {
        return $CAL_G / (100 - $GYPSE) * 100;
    }

    private function calculateMaterial_CV_NG(float $CV_G, float $GYPSE): float
    {
        return $CV_G / (100 - $GYPSE) * 100;
    }

    private function calculateMaterial_LAIT_NG(float $LAIT_G, float $GYPSE): float
    {
        return $LAIT_G / (100 - $GYPSE) *100;
    }

    public function calculateNutrientPercentages(ProportionDTO $data): array
    {

        $GYPSE = $data->GYPSE ?? 0;

        $KK_NG = $this->calculateMaterial_KK_NG($data->KK_G ?? 0, $GYPSE);
        $CAL_NG = $this->calculateMaterial_CAL_NG($data->CAL_G ?? 0, $GYPSE);
        $CV_NG = $this->calculateMaterial_CV_NG($data->CV_G ?? 0, $GYPSE);
        $LAIT_NG = $this->calculateMaterial_LAIT_NG($data->LAIT_G ?? 0, $GYPSE);

        return [
            'KK_NG' => $KK_NG,
            'CAL_NG' => $CAL_NG,
            'CV_NG' => $CV_NG,
            'LAIT_NG' => $LAIT_NG,
        ];
    }

    public function calculatePercentagesEdit($data): array
    {
        
        $GYPSE = $data['GYPSE'] ?? 0;
        
        $KK_NG = $this->calculateMaterial_KK_NG($data['KK_G'] ?? 0, $GYPSE);
        $CAL_NG = $this->calculateMaterial_CAL_NG($data['CAL_G'] ?? 0, $GYPSE);
        $CV_NG = $this->calculateMaterial_CV_NG($data['CV_G'] ?? 0, $GYPSE);
        $LAIT_NG = $this->calculateMaterial_LAIT_NG($data['LAIT_G'] ?? 0, $GYPSE);

        return [
            'KK_NG' => $KK_NG,
            'CAL_NG' => $CAL_NG,
            'CV_NG' => $CV_NG,
            'LAIT_NG' => $LAIT_NG,
        ];
    }

    private function calculateGypseSumEdit($data): float
    {
        return ($data['KK_G'] ?? 0) + ($data['CAL_G'] ?? 0) + ($data['CV_G'] ?? 0) + ($data['LAIT_G'] ?? 0) + ($data['GYPSE'] ?? 0);
    }
}
