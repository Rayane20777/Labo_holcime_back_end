<?php

namespace App\DTOs;
class AnalyseChimiqueDTO {
    public function __construct(
        public ?int $id,
        public float $finesse_2_32, 
        public float $finesse_45,
        public float $finesse_80,
        public float $SSB,
        public float $insoluble,
        public float $CO2,
        public float $PF,
        public float $Cl,
        public float $H41,
        public float $S2,
        public float $CaOl,
        public int $analyse_id,
    ) {}

    public static function fromAdd(array $data): self
    {
        return new self(
            id: null,
            finesse_2_32: $data['finesse_2_32'] ?? 0,
            finesse_45: $data['finesse_45'] ?? 0,
            finesse_80: $data['finesse_80'] ?? 0,
            SSB: $data['SSB'] ?? 0,
            insoluble: $data['insoluble'] ?? 0,
            CO2: $data['CO2'] ?? 0,
            PF: $data['PF'] ?? 0,
            Cl: $data['Cl'] ?? 0,
            H41: $data['H41'] ?? 0,
            S2: $data['S2'] ?? 0,
            CaOl: $data['CaOl'] ?? 0,
            analyse_id: $data['analyse_id'],
        );
    }

    
    
    
}
