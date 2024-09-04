<?php 
namespace App\DTOs;

class ResultatAnalysePhysiqueDTO {
    public function __construct(
        public readonly ?int $id,
        public readonly ?string $j1,
        public readonly ?string $j2,
        public readonly ?string $j7,
        public readonly ?string $j28,
        public readonly ?string $j90,
        // public readonly ?string $w1,
        // public readonly ?string $w2,
        // public readonly ?string $w3,
        // public readonly ?string $w4,
        public readonly int $analyse_id,


    )
    {}

    public static function FromAdd(array $data):self
    {
        return new self(
            id: null,
            j1: $data['1j'] ?? null,
            j2: $data['2j']?? null,
            j7: $data['7j']?? null,
            j28: $data['28j']?? null,
            j90: $data['90j']?? null,
            // w1: $data['w1']?? null,
            // w2: $data['w2']?? null,
            // w3: $data['w3']?? null,
            // w4: $data['w4']?? null,
            analyse_id: $data['analyse_id'],
        );
    }
}