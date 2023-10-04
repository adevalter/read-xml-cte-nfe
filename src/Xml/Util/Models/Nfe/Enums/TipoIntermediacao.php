<?php

namespace Xml\Util\Models\Nfe\Enums;

class TipoIntermediacao
{

    use Traits\EnumTraits;

    const IMPORTACAO_POR_CONTA_PROPRIA = 1;
    const IMPORTACAO_POR_CONTA_E_ORDEM = 2;
    const IMPORTACAO_POR_ENCOMENDA = 3;

    const DESCRICOES = [
        self::IMPORTACAO_POR_CONTA_PROPRIA => 'Importação por conta própria',
        self::IMPORTACAO_POR_CONTA_E_ORDEM => 'Importação por conta e ordem',
        self::IMPORTACAO_POR_ENCOMENDA => 'Importação por encomenda',
    ];
    
}