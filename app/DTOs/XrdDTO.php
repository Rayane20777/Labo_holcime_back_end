<?php

namespace App\DTOs;
class XrdDTO {
    public function __construct(
        public ?int $id,
        public float $SiO2,
        public float $Al2O3,
        public float $Fe2O3,
        public float $CaO,
        public float $MgO,
        public float $SO3,
        public float $K2O,
        public float $Na2O,
        public float $P2O5,
        public int $analyse_id,
    ) {}

    public static function fromAdd(array $data): self
    {
        return new self(
            id: null,
            SiO2: $data['SiO2'] ?? 0,
            Al2O3: $data['Al2O3'] ?? 0,
            Fe2O3: $data['Fe2O3'] ?? 0,
            CaO: $data['CaO'] ?? 0,
            MgO: $data['MgO'] ?? 0,
            SO3: $data['SO3'] ?? 0,
            K2O: $data['K2O'] ?? 0,
            Na2O: $data['Na2O'] ?? 0,
            P2O5: $data['P2O5'] ?? 0,
            analyse_id: $data['analyse_id'],
        );
    }

    
    
    
}
