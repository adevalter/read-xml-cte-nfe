<?php

namespace Xml\Util\Models\Nfe\Enums;
use Xml\Util\Models\Nfe\Enums\Traits\EnumTraits;

class FinalidadeEmissao
{
    use EnumTraits;

    const NORMAL = 1;
    const COMPLEMENTAR = 2;
    const AJUSTE = 3;
    const DEVOLUCAO = 4;

    const DESCRICOES = [
        self::NORMAL => 'Normal',
        self::COMPLEMENTAR => 'Complementar',
        self::AJUSTE => 'Ajuste',
        self::DEVOLUCAO => 'Devolução',
    ];
    
}