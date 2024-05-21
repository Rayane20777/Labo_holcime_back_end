<?php

namespace App\DTOs;

class ProportionDTO
{
    public function __construct(
        public readonly ?int $id,
        public readonly ?float $KK_G,
        public readonly ?float $CAL_G,
        public readonly ?float $CV_G,
        public readonly ?float $LAIT_G,
        public readonly ?float $GYPSE,
        public readonly ?float $KK_NG,
        public readonly ?float $CAL_NG,
        public readonly ?float $CV_NG,
        public readonly ?float $LAIT_NG,
        public readonly int $analyse_id
    ) {}

    public static function fromAdd(array $data): self
    {
        return new self(
            id: null,
            KK_G: $data['KK_G'] ?? null,
            CAL_G: $data['CAL_G'] ?? null,
            CV_G: $data['CV_G'] ?? null,
            LAIT_G: $data['LAIT_G'] ?? null,
            GYPSE: $data['GYPSE'] ,
            KK_NG: null,
            CAL_NG: null,
            CV_NG: null,
            LAIT_NG: null,
            analyse_id: $data['analyse_id']
        );
    }

    // public static function fromEdit(array $data): self
    // {
    //     return new self(
    //         id: $data['id'],
    //         KK_G: $data['KK_G'] ?? null,
    //         CAL_G: $data['CAL_G'] ?? null,
    //         CV_G: $data['CV_G'] ?? null,
    //         LAIT_G: $data['LAIT_G'] ?? null,
    //         GYPSE: $data['GYPSE'] ?? null,
    //         KK_NG: null,
    //         CAL_NG: null,
    //         CV_NG: null,
    //         LAIT_NG: null,
    //         analyse_id: $data['analyse_id']
    //     );
    // }
}
