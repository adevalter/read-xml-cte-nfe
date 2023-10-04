<?php

namespace Xml\Util\Models\Nfe\Enums;

class RegimeTributario
{
    use Traits\EnumTraits;

    const SIMPLES_NACIONAL = 1;
    const SIMPLES_NACIONAL_EXCESSO_RECEITA_BRUTA = 2;
    const REGIME_NORMAL = 3;

    const DESCRICOES = [
        self::SIMPLES_NACIONAL => 'Simples Nacional',
        self::SIMPLES_NACIONAL_EXCESSO_RECEITA_BRUTA => 'Simples Nacional - excesso de sublimite de receita bruta',
        self::REGIME_NORMAL => 'Regime Normal',
    ];

}
