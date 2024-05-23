<?php

namespace App\DTOs;
class XrdDTO {
    public function __construct(
        public ?int $id,
        public float $Displacement,
        public float $Alite_CS,
        public float $R_wp,
        public float $FA_Sum,
        public float $Clinker,
        public float $fCaO_XRD,
        public float $Alite_Sum,
        public float $Belite_Sum,
        public float $Alum_Sum,
        public float $Ferrite,
        public float $Gypse,
        public float $CALCAIRE,
        public float $SO3,
        public float $Mullite,
        public float $Quartz,
        public float $Magnetite,
        public float $Hematite,
        public float $Flyash_amorph,
        public float $Alite_M1,
        public float $Alite_M3,
        public float $Fraction_M1,
        public float $R_exp,
        public float $Alite_PO,
        public float $Belite_alpha,
        public float $Belite_alpha_H,
        public float $Belite_beta,
        public float $Belite_gamma,
        public float $Alum_cubic,
        public float $Alum_ortho,
        public float $Lime,
        public float $Portlandite,
        public float $Periclase,
        public float $Arcanite,
        public float $Aphthitalite,
        public float $Langbeinite,
        public float $Gypsum,
        public float $Hemi_Hydrate,
        public float $Anhydrite,
        public float $SO3_XRD,
        public float $CO2_XRD,
        public float $Syngenite,
        public float $Calcite,
        public float $Dolomite,
        public int $analyse_id,
    ) {}

    public static function fromAdd(array $data): self
    {
        return new self(
            id: null,
        Displacement: $data['Displacement'],
        Alite_CS: $data['Alite_CS'],
        R_wp: $data['R_wp'],
        FA_Sum: $data['FA_Sum'],
        Clinker: $data['Clinker'],
        fCaO_XRD: $data['fCaO_XRD'],
        Alite_Sum: $data['Alite_Sum'],
        Belite_Sum: $data['Belite_Sum'],
        Alum_Sum: $data['Alum_Sum'],
        Ferrite: $data['Ferrite'],
        Gypse: $data['Gypse'],
        CALCAIRE: $data['CALCAIRE'],
        SO3: $data['SO3'],
        Mullite: $data['Mullite'],
        Quartz: $data['Quartz'],
        Magnetite: $data['Magnetite'],
        Hematite: $data['Hematite'],
        Flyash_amorph: $data['Flyash_amorph'],
        Alite_M1: $data['Alite_M1'],
        Alite_M3: $data['Alite_M3'],
        Fraction_M1: $data['Fraction_M1'],
        R_exp: $data['R_exp'],
        Alite_PO: $data['Alite_PO'],
        Belite_alpha: $data['Belite_alpha'],
        Belite_alpha_H: $data['Belite_alpha_H'],
        Belite_beta: $data['Belite_beta'],
        Belite_gamma: $data['Belite_gamma'],
        Alum_cubic: $data['Alum_cubic'],
        Alum_ortho: $data['Alum_ortho'],
        Lime: $data['Lime'],
        Portlandite: $data['Portlandite'],
        Periclase: $data['Periclase'],
        Arcanite: $data['Arcanite'],
        Aphthitalite: $data['Aphthitalite'],
        Langbeinite: $data['Langbeinite'],
        Gypsum: $data['Gypsum'],
        Hemi_Hydrate: $data['Hemi_Hydrate'],
        Anhydrite: $data['Anhydrite'],
        SO3_XRD: $data['SO3_XRD'],
        CO2_XRD: $data['CO2_XRD'],
        Syngenite: $data['Syngenite'],
        Calcite: $data['Calcite'],
        Dolomite: $data['Dolomite'],
        analyse_id: $data['analyse_id'],
        );
    }

    
    
    
}
