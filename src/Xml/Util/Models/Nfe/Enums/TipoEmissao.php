<?php

namespace Xml\Util\Models\Nfe\Enums;

class TipoEmissao
{

    use Traits\EnumTraits;

    const NORMAL = 1;
    const CONTINGENCIA_FS = 2;
    const CONTINGENCIA_SCAN = 3;
    const CONTINGENCIA_DPEC = 4;
    const CONTINGENCIA_FS_DA = 5;
    const CONTINGENCIA_SVC_AN = 6;
    const CONTINGENCIA_SVC_RS = 7;
    const CONTINGENCIA_OFFLINE_NFC_E = 9;

    const DESCRICOES = [
        self::NORMAL => 'Normal',
        self::CONTINGENCIA_FS => 'Contingência FS',
        self::CONTINGENCIA_SCAN => 'Contingência SCAN',
        self::CONTINGENCIA_DPEC => 'Contingência DPEC',
        self::CONTINGENCIA_FS_DA => 'Contingência FS-DA',
        self::CONTINGENCIA_SVC_AN => 'Contingência SVC-AN',
        self::CONTINGENCIA_SVC_RS => 'Contingência SVC-RS',
        self::CONTINGENCIA_OFFLINE_NFC_E => 'Contingência Offline NFC-e',
    ];
    
}