<?php 
namespace App\DTOs;

class PhaseGachageDTO {
    public function __construct(
        public readonly ?int $id,
        public readonly float $temperature,
        public readonly float $humidite,
        public readonly float $p_prisme,
        public readonly string $temps_gachage,
        public readonly string $temps_casse

    )
    {}

    public static function FromAdd(array $data)
    {}
}