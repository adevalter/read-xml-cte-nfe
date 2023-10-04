<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;
use Xml\Util\Models\Nfe\Enums\Traits\EnumTraits;

class ModalidadeDeDeterminacaoDaBCdoICMS
{

    use EnumTraits;

    /**
     * Margem Valor Agregado (%)
     */
    const MARGEM_VALOR_AGREGADO = 0;

    /**
     * Pauta (Valor)
     */
    const PAUTA = 1;

    /**
     * Preço Tabelado Máx. (valor)
     */
    const PRECO_TABELADO_MAX = 2;

    /**
     * Valor da operação
     */
    const VALOR_DA_OPERACAO = 3;

    const DESCRICOES = [
        self::MARGEM_VALOR_AGREGADO => 'Margem Valor Agregado (%)',
        self::PAUTA => 'Pauta (Valor)',
        self::PRECO_TABELADO_MAX => 'Preço Tabelado Máx. (valor)',
        self::VALOR_DA_OPERACAO => 'Valor da operação',
    ];

}