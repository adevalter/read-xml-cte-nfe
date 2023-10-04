<?php

namespace Xml\Util\Models\Nfe\Enums;

class OperacaoDePresencaDoComprador
{
    use Traits\EnumTraits;

    const NAO_SE_APLICA = 0;
    const OPERACAO_PRESENCIAL = 1;
    const OPERACAO_NAO_PRESENCIAL_INTERNET = 2;
    const OPERACAO_NAO_PRESENCIAL_TELEATENDIMENTO = 3;
    const NFE_ENTREGA_DOMICILIO = 4;
    const OPERACAO_PRESENCIAL_FORA_ESTABELECIMENTO = 5;
    const OPERACAO_NAO_PRESENCIAL_OUTROS = 9;

    const DESCRICOES = [
        self::NAO_SE_APLICA => 'Não se aplica',
        self::OPERACAO_PRESENCIAL => 'Operação presencial',
        self::OPERACAO_NAO_PRESENCIAL_INTERNET => 'Operação não presencial, pela Internet',
        self::OPERACAO_NAO_PRESENCIAL_TELEATENDIMENTO => 'Operação não presencial, Teleatendimento',
        self::NFE_ENTREGA_DOMICILIO => 'NFC-e em operação com entrega a domicílio',
        self::OPERACAO_PRESENCIAL_FORA_ESTABELECIMENTO => 'Operação presencial fora do estabelecimento',
        self::OPERACAO_NAO_PRESENCIAL_OUTROS => 'Operação não presencial, outros',
    ];
    
}