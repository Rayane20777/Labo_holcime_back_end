<?php 
namespace App\DTOs;

class ResultatAnalysePhysiqueDTO {
    public function __construct(
        public readonly ?int $id,
        public readonly ?float $j1,
        public readonly ?float $j2,
        public readonly ?float $j7,
        public readonly ?float $j28,
        public readonly ?float $j90,
        public readonly ?float $w1,
        public readonly ?float $w2,
        public readonly ?float $w3,
        public readonly ?float $w4,
        public readonly int $analyse_id,


    )
    {}

    public static function FromAdd(array $data):self
    {
        return new self(
            id: null,
            j1: $data['j1'],
            j2: $data['j2'],
            j7: $data['j7'],
            j28: $data['j28'],
            j90: $data['j90'],
            w1: $data['w1'],
            w2: $data['w2'],
            w3: $data['w3'],
            w4: $data['w4'],
            analyse_id: $data['analyse_id'],
        );
    }
}