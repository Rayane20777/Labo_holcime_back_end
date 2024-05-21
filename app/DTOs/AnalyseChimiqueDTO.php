<?php

namespace App\DTOs;
use App\Models\Analyse;
class AnalyseChimiqueDTO {
    public function __construct(
        public ?int $id,
        public float $finesse_2_32,
        public float $finesse_45,
        public float $finesse_80,
        public float $SSB,
        public float $insoluble,
        public float $SiO2,
        public float $Al2O3,
        public float $Fe2O3,
        public float $CaO,
        public float $MgO,
        public float $SO3,
        public float $K2O,
        public float $Na2O,
        public float $P2O5,
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
            finesse_2_32: $data['finesse_2_32'],
            finesse_45: $data['finesse_45'],
            finesse_80: $data['finesse_80'],
            SSB: $data['SSB'],
            insoluble: $data['insoluble'],
            SiO2: $data['SiO2'],
            Al2O3: $data['Al2O3'],
            Fe2O3: $data['Fe2O3'],
            CaO: $data['CaO'],
            MgO: $data['MgO'],
            SO3: $data['SO3'],
            K2O: $data['K2O'],
            Na2O: $data['Na2O'],
            P2O5: $data['P2O5'],
            CO2: $data['CO2'],
            PF: $data['PF'],
            Cl: $data['Cl'],
            H41: $data['H41'],
            S2: $data['S2'],
            CaOl: $data['CaOl'],
            analyse_id: $data['analyse_id'],
        );
    }

    
    
    
}
