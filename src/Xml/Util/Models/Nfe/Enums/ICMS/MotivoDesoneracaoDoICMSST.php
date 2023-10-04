<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;
use Xml\Util\Models\Nfe\Enums\Traits\EnumTraits;

class MotivoDesoneracaoDoICMSST
{

    use EnumTraits;
    /**
     * Uso na agropecuária
     */
    const USO_NA_AGROPECUARIA = 3;

    /**
     * Outros
     */
    const OUTROS = 9;

    /**
     * Órgão de fomento e desenvolvimento agropecuário
     */
    const ORGAO_DE_FOMENTO_E_DESENVOLVIMENTO_AGROPECUARIO = 12;
   

    const DESCRICOES = [
        self::USO_NA_AGROPECUARIA => 'Uso na agropecuária',
        self::OUTROS => 'Outros',
        self::ORGAO_DE_FOMENTO_E_DESENVOLVIMENTO_AGROPECUARIO => 'Órgão de fomento e desenvolvimento agropecuário',
    ];
    
    
}