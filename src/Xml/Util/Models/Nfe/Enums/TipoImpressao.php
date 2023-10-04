<?php

namespace Xml\Util\Models\Nfe\Enums;

class TipoImpressao
{
    use Traits\EnumTraits;

    const RETRATO = 1;
    const PAISAGEM = 2;
    const SIMPLIFICADO = 3;
    const DANFE_NFC_E = 4;
    const DANFE_NFC_E_EM_MENSAGEM_ELETRONICA = 5;

    const DESCRICOES = [
        self::RETRATO => 'Retrato',
        self::PAISAGEM => 'Paisagem',
        self::SIMPLIFICADO => 'Simplificado',
        self::DANFE_NFC_E => 'DANFE NFC-e',
        self::DANFE_NFC_E_EM_MENSAGEM_ELETRONICA => 'DANFE NFC-e em mensagem eletrônica',
    ];
}