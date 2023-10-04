<?php

namespace Xml\Util\Models\Nfe\Enums;

class ProcessoEmissao
{

    use Traits\EnumTraits;

    const APLICATIVO_CONTRIBUINTE = 0;
    const EMISSAO_AVULSA_FISCO = 1;
    const EMISSAO_AVULSA_CONTRIBUINTE = 2;
    const APLICATIVO_FISCO = 3;
    const EMISSAO_FISCO = 4;
    const EMISSAO_CT_E = 5;
    const APLICATIVO_FISCO_AUTORIZACAO = 6;

    const DESCRICOES = [
        self::APLICATIVO_CONTRIBUINTE => 'Aplicativo do contribuinte',
        self::EMISSAO_AVULSA_FISCO => 'Emissão avulsa pelo Fisco',
        self::EMISSAO_AVULSA_CONTRIBUINTE => 'Emissão avulsa pelo contribuinte com seu certificado digital, através do site do Fisco',
        self::APLICATIVO_FISCO => 'Aplicativo fornecido pelo Fisco',
        self::EMISSAO_FISCO => 'Emissão pelo contribuinte com aplicativo fornecido pelo Fisco',
        self::EMISSAO_CT_E => 'Emissão de CT-e pelo contribuinte com aplicativo fornecido pelo Fisco',
        self::APLICATIVO_FISCO_AUTORIZACAO => 'Aplicativo do Fisco - autorização em contingência',
    ];
}
