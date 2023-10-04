<?php

namespace Xml\Util\Models\Nfe\Enums;

class LocalDestinoOperacao
{

    use Traits\EnumTraits;

    const OPERACAO_INTERNA = 1;
    const OPERACAO_INTERESTADUAL = 2;
    const OPERACAO_EXTERIOR = 3;
    
    const DESCRICOES = [
        self::OPERACAO_INTERNA => 'Operação interna',
        self::OPERACAO_INTERESTADUAL => 'Operação interestadual',
        self::OPERACAO_EXTERIOR => 'Operação com exterior',
    ];
}