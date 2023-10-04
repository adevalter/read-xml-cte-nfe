<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;
use Xml\Util\Models\Nfe\Enums\Traits\EnumTraits;

class modalidadeDeDeterminacaoDaBCDoICMSSt
{

    use EnumTraits;

    /**
     * Preço tabelado ou máximo sugerido
     */
    const PRECO_TABELADO_MAXIMO_SUGERIDO = 0;

    /**
     * Lista Negativa (valor)
     */
    const LISTA_NEGATIVA = 1;

    /**
     * Lista Positiva (valor)
     */
    const LISTA_POSITIVA = 2;

    /**
     * Lista Neutra (valor)
     */
    const LISTA_NEUTRA = 3;

    /**
     * Margem Valor Agregado (%)
     */
    const MARGEM_VALOR_AGREGADO = 4;

    /**
     * Pauta (valor)
     */
    const PAUTA = 5;

    /**
     * Valor da Operação
     */
    const VALOR_DA_OPERACAO = 6;

    const DESCRICOES = [
        self::PRECO_TABELADO_MAXIMO_SUGERIDO => 'Preço tabelado ou máximo sugerido',
        self::LISTA_NEGATIVA => 'Lista Negativa (valor)',
        self::LISTA_POSITIVA => 'Lista Positiva (valor)',
        self::LISTA_NEUTRA => 'Lista Neutra (valor)',
        self::MARGEM_VALOR_AGREGADO => 'Margem Valor Agregado (%)',
        self::PAUTA => 'Pauta (valor)',
        self::VALOR_DA_OPERACAO => 'Valor da Operação',
    ];


}