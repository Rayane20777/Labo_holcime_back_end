<?php 
namespace App\DTOs;

class ResulatPhysiqueLpeeDTO {
    public function __construct(
        public readonly ?int $id,
        public readonly ?string $j1_lpee,
        public readonly ?string $j2_lpee,
        public readonly ?string $j7_lpee,
        public readonly ?string $j28_lpee,
        public readonly ?string $j90_lpee,
        public readonly int $analyse_id,


    )
    {}

    public static function FromAdd(array $data):self
    {
        return new self(
            id: null,
            j1_lpee: $data['1j_lpee'] ?? null,
            j2_lpee: $data['2j_lpee']?? null,
            j7_lpee: $data['7j_lpee']?? null,
            j28_lpee: $data['28j_lpee']?? null,
            j90_lpee: $data['90j_lpee']?? null,
            analyse_id: $data['analyse_id'],
        );
    }
}