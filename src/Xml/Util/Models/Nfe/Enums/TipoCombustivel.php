<?php

namespace Xml\Util\Models\Nfe\Enums;

class TipoCombustivel
{
    use Traits\EnumTraits;

    const ALCOOL = 1;
    const GASOLINA = 2;
    const DIESEL = 3;
    const ALCOOL_GASOLINA = 16;
    const GASOLINA_ALCOOL_GNV = 17;
    const GASOLINA_ELETRICO = 18;
    
    const DESCRICOES = [
        self::ALCOOL => 'Álcool',
        self::GASOLINA => 'Gasolina',
        self::DIESEL => 'Diesel',
        self::ALCOOL_GASOLINA => 'Álcool/Gasolina',
        self::GASOLINA_ALCOOL_GNV => 'Gasolina/Álcool/GNV',
        self::GASOLINA_ELETRICO => 'Gasolina/Elétrico',
    ];
}