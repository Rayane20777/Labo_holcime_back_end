<?php 
namespace App\DTOs;

class PhaseGachageDTO {
    public function __construct(
        public readonly ?int $id,
        public readonly float $temperature,
        public readonly float $temperature_salle,
        public readonly float $humidite,
        public readonly float $p_prisme,
        public readonly string $temps_gachage,
        public readonly string $temps_casse,
        public readonly string $analyse_id,

    )
    {}

    public static function FromAdd(array $data):self
    {
        return new self(
            id: null,
            temperature: $data['temperature'],
            temperature_salle: $data['temperature_salle'],
            humidite: $data['humidite'],
            p_prisme: $data['p_prisme'],
            temps_gachage: $data['temps_gachage'],
            temps_casse: $data['temps_casse'],
            analyse_id: $data['analyse_id'],
        );
    }
}