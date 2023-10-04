<?php

namespace Xml\Util\Models\Nfe\Enums;

class TipoItem
{

    use Traits\EnumTraits;

    const PRODUTOS = 0;
    const VEICULOS = 1;
    const MEDICAMENTOS = 2;
    const ARMAMENTOS = 3;
    const COMBUSTIVEL = 4;
    const SERVICO = 5;

    const DESCRICOES = [
        self::PRODUTOS => 'Produtos',
        self::VEICULOS => 'Veículos',
        self::MEDICAMENTOS => 'Medicamentos',
        self::ARMAMENTOS => 'Armamentos',
        self::COMBUSTIVEL => 'Combustível',
        self::SERVICO => 'Serviço',
    ];

}