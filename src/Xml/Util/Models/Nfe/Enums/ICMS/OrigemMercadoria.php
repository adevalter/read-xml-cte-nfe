<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;
use Xml\Util\Models\Nfe\Enums\Traits\EnumTraits;

class OrigemMercadoria
{

    use EnumTraits;
    /**
     * Nacional - Exceto as indicadas nos códigos 3,4,5 e 8
     */
    const NACIONAL = 0;

    /**
     * Estrangeira - Importação Direta
     */
    const ESTRANGEIRA_IMPORTACAO_DIRETA = 1;

    /**
     * Estrangeira - Adq. no mercado interno
     */
    const ESTRANGEIRA_ADQ_MERCADO_INTERNO = 2;

    /**
     * Nacional - com Conteúdo de Importação superior a 40% e inferior ou igual a 70%
     */
    const NACIONAL_CONTEUDO_IMPORTACAO_40_70 = 3;

    /**
     * Nacional - cuja produção tenha sido feita em conformidade
     */
    const NACIONAL_PRODUCAO_CONFORMIDADE = 4;
    
    /**
     * Nacional - com Conteúdo de Importação inferior ou igual a 40%
     */ 
    const NACIONAL_CONTEUDO_IMPORTACAO_40 = 5;

    /**
     * Estrangeira - Imp. direta, sem similar nacional, na lista da CAMEX
     */
    const ESTRANGEIRA_IMPORTACAO_DIRETA_SEM_SIMILAR_NACIONAL = 6;

    /**
     * Estrangeira - Adq. interno, sem similar nacional, na lista da CAMEX
     */
    const ESTRANGEIRA_ADQ_INTERNO_SEM_SIMILAR_NACIONAL = 7;

    /**
     * Nacional - Mercadoria ou bem com Conteúdo de Importação superior a 70%
     */
    const NACIONAL_CONTEUDO_IMPORTACAO_70 = 8;

    const DESCRICOES = [
        self::NACIONAL => 'Nacional - Exceto as indicadas nos códigos 3,4,5 e 8',
        self::ESTRANGEIRA_IMPORTACAO_DIRETA => 'Estrangeira - Importação Direta',
        self::ESTRANGEIRA_ADQ_MERCADO_INTERNO => 'Estrangeira - Adq. no mercado interno',
        self::NACIONAL_CONTEUDO_IMPORTACAO_40_70 => 'Nacional - com Conteúdo de Importação superior a 40% e inferior ou igual a 70%',
        self::NACIONAL_PRODUCAO_CONFORMIDADE => 'Nacional - cuja produção tenha sido feita em conformidade',
        self::NACIONAL_CONTEUDO_IMPORTACAO_40 => 'Nacional - com Conteúdo de Importação inferior ou igual a 40%',
        self::ESTRANGEIRA_IMPORTACAO_DIRETA_SEM_SIMILAR_NACIONAL => 'Estrangeira - Imp. direta, sem similar nacional, na lista da CAMEX',
        self::ESTRANGEIRA_ADQ_INTERNO_SEM_SIMILAR_NACIONAL => 'Estrangeira - Adq. interno, sem similar nacional, na lista da CAMEX',
        self::NACIONAL_CONTEUDO_IMPORTACAO_70 => 'Nacional - Mercadoria ou bem com Conteúdo de Importação superior a 70%',
    ];
    
}