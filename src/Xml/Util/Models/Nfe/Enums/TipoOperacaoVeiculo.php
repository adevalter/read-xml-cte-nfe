<?php

namespace Xml\Util\Models\Nfe\Enums;

class TipoOperacaoVeiculo
{
    use Traits\EnumTraits;

    const VENDA_CONCESSIONARIA = 1;
    const FATURAMENTO_DIRETO = 2;
    const VENDA_DIRETA = 3;
    const OUTROS = 0;

    const DESCRICOES = [
        self::VENDA_CONCESSIONARIA => 'Venda concessionária',
        self::FATURAMENTO_DIRETO => 'Faturamento direto',
        self::VENDA_DIRETA => 'Venda direta',
        self::OUTROS => 'Outros',
    ];
    
}