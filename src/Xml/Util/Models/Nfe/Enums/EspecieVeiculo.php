<?php

namespace Xml\Util\Models\Nfe\Enums;
use Xml\Util\Models\Nfe\Enums\Traits\EnumTraits;

class EspecieVeiculo
{

    use EnumTraits;

    const PASSAGEIRO = 1;
    const CARGA = 2;
    const MISTO = 3;
    const TRACAO = 5;
    const ESPECIAL = 6;

    const DESCRICOES = [
        self::PASSAGEIRO => 'Passageiro',
        self::CARGA => 'Carga',
        self::MISTO => 'Misto',
        self::TRACAO => 'Tração',
        self::ESPECIAL => 'Especial',
    ];

}