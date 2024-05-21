<?php 
namespace App\DTOs;

class PhaseTempsPriseDTO {
    public function __construct(
        public readonly ?int $id,
        public readonly float $mass_volumique,
        public readonly float $debut_de_prise,
        public readonly float $fin_de_prise,
        public readonly string $expention,
        public readonly string $eau_gach,
        public readonly string $analyse_id,

    )
    {}

    public static function FromAdd(array $data):self
    {
        return new self(
            id: null,
            mass_volumique: $data['mass_volumique'],
            debut_de_prise: $data['debut_de_prise'],
            fin_de_prise: $data['fin_de_prise'],
            expention: $data['expention'],
            eau_gach: $data['eau_gach'],
            analyse_id: $data['analyse_id'],
        );
    }
}