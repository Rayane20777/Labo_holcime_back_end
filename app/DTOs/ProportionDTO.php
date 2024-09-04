<?php

namespace App\DTOs;

class ProportionDTO
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $KK_G,
        public readonly string $CAL_G,
        public readonly string $CV_G,
        public readonly string $LAIT_G,
        public readonly string $GYPSE,
        // public readonly string $KK_NG,
        // public readonly string $CAL_NG,
        // public readonly string $CV_NG,
        // public readonly string $LAIT_NG,
        public readonly string $analyse_id
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
            // KK_NG: null,
            // CAL_NG: null,
            // CV_NG: null,
            // LAIT_NG: null,
            analyse_id: $data['analyse_id'],
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
