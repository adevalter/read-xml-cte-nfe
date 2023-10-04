<?php

namespace Xml\Util\Models\Nfe\Enums;

class TipoOperacao
{
    use Traits\EnumTraits;

    const ENTRADA = 0;
    const SAIDA = 1;

    const DESCRICOES = [
        self::ENTRADA => 'Entrada',
        self::SAIDA => 'Saída',
    ];
    
}