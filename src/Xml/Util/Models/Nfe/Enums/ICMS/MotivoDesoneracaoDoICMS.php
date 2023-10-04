<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;
use Xml\Util\Models\Nfe\Enums\Traits\EnumTraits;

class MotivoDesoneracaoDoICMS
{
    use EnumTraits;

    /**
     * Táxi
     */
    const TAXI = 1;

    /**
     * Deficiente Físico
     */
    const DEFICIENTE_FISICO = 2;

    /**
     * Produtor Agropecuário
     */

    const PRODUTOR_AGROPECUARIO = 3;

    /**
     * Frotista/Locadora
     */
    const FROTISTA_LOCADORA = 4;

    /**
     * Diplomático/Consular
     */
    const DIPLOMATICO_CONSULAR = 5;

    /**
     * Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 – CONTRAN e suas alterações)
     */
    const UTILITARIOS_MOTOCICLETAS_AMAZONIA_OCIDENTAL = 6;

    /**
     * SUFRAMA
     */
    const SUFRAMA = 7;

    /**
     * Venda a Órgãos públicos (NT2011/004)
     */
    const VENDA_ORGAOS_PUBLICOS = 8;

    /**
     * outros (NT2011/004)
     */
    const OUTROS = 9;
    
    /**
     * Deficiente Condutor (Convênio ICMS 38/12)
     */
    const DEFICIENTE_CONDUTOR = 10;

    /**
     * Deficiente Não Condutor (Convênio ICMS 38/12)
     */
    const DEFICIENTE_NAO_CONDUTOR = 11;

    /**
     * Olimpíadas Rio 2016
     */
    const OLIMPIADAS_RIO_2016 = 16;


    const DESCRICOES = [
        self::TAXI => 'Táxi',
        self::DEFICIENTE_FISICO => 'Deficiente Físico',
        self::PRODUTOR_AGROPECUARIO => 'Produtor Agropecuário',
        self::FROTISTA_LOCADORA => 'Frotista/Locadora',
        self::DIPLOMATICO_CONSULAR => 'Diplomático/Consular',
        self::UTILITARIOS_MOTOCICLETAS_AMAZONIA_OCIDENTAL => 'Utilitários e Motocicletas da Amazônia Ocidental e Áreas de Livre Comércio (Resolução 714/88 e 790/94 – CONTRAN e suas alterações)',
        self::SUFRAMA => 'SUFRAMA',
        self::VENDA_ORGAOS_PUBLICOS => 'Venda a Órgãos públicos (NT2011/004)',
        self::OUTROS => 'outros (NT2011/004)',
        self::DEFICIENTE_CONDUTOR => 'Deficiente Condutor (Convênio ICMS 38/12)',
        self::DEFICIENTE_NAO_CONDUTOR => 'Deficiente Não Condutor (Convênio ICMS 38/12)',
        self::OLIMPIADAS_RIO_2016 => 'Olimpíadas Rio 2016',
    ];
    
}