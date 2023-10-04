<?php

namespace Xml\Util\Models\Nfe\Enums;

class ViaTrasporte
{
    use Traits\EnumTraits;

    const MARITIMA = 1;
    const FLUVIAL = 2;
    const LACUSTRE = 3;
    const AEREA = 4;
    const POSTAL = 5;
    const FERROVIARIA = 6;
    const RODOVIARIA = 7;
    const CONDUTO_REDE_TRANSMISSAO = 8;
    const MEIOS_PROPRIOS = 9;

    const ENTRADA_SAIDA_FICTA = 10;
    const COURIER = 11;
    const EM_MAOS = 12;
    const POR_REBOQUE = 13;

    const DETALHES = [
        self::MARITIMA => 'Marítima',
        self::FLUVIAL => 'Fluvial',
        self::LACUSTRE => 'Lacustre',
        self::AEREA => 'Aérea',
        self::POSTAL => 'Postal',
        self::FERROVIARIA => 'Ferroviária',
        self::RODOVIARIA => 'Rodoviária',
        self::CONDUTO_REDE_TRANSMISSAO => 'Conduto / Rede de transmissão',
        self::MEIOS_PROPRIOS => 'Meios próprios',
        self::ENTRADA_SAIDA_FICTA => 'Entrada / Saída ficta',
        self::COURIER => 'Courier',
        self::EM_MAOS => 'Em mãos',
        self::POR_REBOQUE => 'Por reboque',
    ];

}