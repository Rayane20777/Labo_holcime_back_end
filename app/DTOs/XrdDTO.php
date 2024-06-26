<?php

namespace App\DTOs;
class XrdDTO {
    public function __construct(
        public ?int $id,
        public float $GOF,
        public float $R_wp,
        public float $R_exp,
        public float $Displacement,
        public float $Alite_M3,
        public float $Alite_M1,
        public float $Alite_Sum,
        public float $Fraction_M1,
        public float $Alite_CS, 
        public float $Alite_PO, 
        public float $Belite_beta,
        public float $Belite_alpha,
        public float $Belite_alpha_H,
        public float $Belite_gamma,
        public float $Belite_Sum,
        public float $Alum_cubic,
        public float $Alum_ortho,
        public float $Alum_mono,
        public float $Alum_Sum,
        public float $Ferrite,
        public float $Lime,
        public float $Portlandite,
        public float $fCaO_XRD,
        public float $Periclase,
        public float $Quartz,
        public float $Arcanite,
        public float $Thenardite,
        public float $Langbeinite,
        public float $Aphthitalite,
        public float $Gypsum,
        public float $Hemi_Hydrate,
        public float $Anhydrite,
        public float $Calcite,
        public float $Dolomite,
        public float $Mullite,
        public float $Magnetite,
        public float $Hematite,
        public float $Flyash_amorph,
        public float $FA_Sum,
        public float $Syngenite,
        public float $Albite,
        public float $Anorthite,
        public float $Andesine,
        public float $K_Feldspar,
        public float $Illite,
        public float $Feldspar_Sum,
        public float $SO3_XRD,
        public float $CO2_XRD,
        public int $analyse_id,
    ) {}

    public static function fromAdd(array $data): self
    {
        return new self(
        id: null,
        GOF: $data['GOF'] ?? 0,
        R_wp: $data['R_wp'] ?? 0,
        R_exp: $data['R_exp'] ?? 0,
        Displacement: $data['Displacement'] ?? 0,
        Alite_M3: $data['Alite_M3'] ?? 0,
        Alite_M1: $data['Alite_M1'] ?? 0,
        Alite_Sum: $data['Alite_Sum'] ?? 0,
        Fraction_M1: $data['Fraction_M1'] ?? 0,
        Alite_CS: $data['Alite_CS'] ?? 0,
        Alite_PO: $data['Alite_PO'] ?? 0,
        Belite_beta: $data['Belite_beta'] ?? 0,
        Belite_alpha: $data['Belite_alpha'] ?? 0,
        Belite_alpha_H: $data['Belite_alpha_H'] ?? 0,
        Belite_gamma: $data['Belite_gamma'] ?? 0,
        Belite_Sum: $data['Belite_Sum'] ?? 0,
        Alum_cubic: $data['Alum_cubic'] ?? 0,
        Alum_ortho: $data['Alum_ortho'] ?? 0,
        Alum_mono: $data['Alum_mono'] ?? 0,
        Alum_Sum: $data['Alum_Sum'] ?? 0,
        Ferrite: $data['Ferrite'] ?? 0,
        Lime: $data['Lime'] ?? 0,
        Portlandite: $data['Portlandite'] ?? 0,
        fCaO_XRD: $data['fCaO_XRD'] ?? 0,
        Periclase: $data['Periclase'] ?? 0,
        Quartz: $data['Quartz'] ?? 0,
        Arcanite: $data['Arcanite'] ?? 0,
        Thenardite: $data['Thenardite'] ?? 0,
        Langbeinite: $data['Langbeinite'] ?? 0,
        Aphthitalite: $data['Aphthitalite'] ?? 0,
        Gypsum: $data['Gypsum'] ?? 0,
        Hemi_Hydrate: $data['Hemi_Hydrate'] ?? 0,
        Anhydrite: $data['Anhydrite'] ?? 0,
        Calcite: $data['Calcite'] ?? 0,
        Dolomite: $data['Dolomite'] ?? 0,
        Mullite: $data['Mullite'] ?? 0,
        Magnetite: $data['Magnetite'] ?? 0,
        Hematite: $data['Hematite'] ?? 0,
        Flyash_amorph: $data['Flyash_amorph'] ?? 0,
        FA_Sum: $data['FA_Sum'] ?? 0,
        Syngenite: $data['Syngenite'] ?? 0,
        Albite: $data['Albite'] ?? 0,
        Anorthite: $data['Anorthite'] ?? 0,
        Andesine: $data['Andesine'] ?? 0,
        K_Feldspar: $data['K_Feldspar'] ?? 0,
        Illite: $data['Illite'] ?? 0,
        Feldspar_Sum: $data['Feldspar_Sum'] ?? 0,
        SO3_XRD: $data['SO3_XRD'] ?? 0,
        CO2_XRD: $data['CO2_XRD'] ?? 0,
        analyse_id: $data['analyse_id'],
        );
    }

    
    
    
}
