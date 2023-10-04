<?php

namespace Xml\Util\Models\Nfe\Enums\ICMS;
use Xml\Util\Models\Nfe\Enums\Traits\EnumTraits;

class TributacaoICMS
{

    use EnumTraits;

    /**
     * Tributada integralmente
     */
    const TRIBUTADA_INTEGRALMENTE = '00';

    /**
     * Tributação monofásica própria sobre combustíveis
     */
    const TRIBUTACAO_MONOFASICA_PROPRIA_COMBUSTIVEIS = '02';

    /**
     * Tributada e com cobrança do ICMS por substituição tributária
     */
    const TRIBUTADA_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '10';

    /**
     * Tributação monofásica própria e com responsabilidade pela retenção sobre combustíveis
     */
    const TRIBUTACAO_MONOFASICA_PROPRIA_COM_RESPONSAVEL_RETENCAO_COMBUSTIVEIS = '15';

    /**
     * Com redução de base de cálculo
     */
    const COM_REDUCAO_BASE_CALCULO = '20';

    /**
     * Isenta ou não tributada e com cobrança do ICMS por substituição tributária
     */
    const ISENTA_NAO_TRIBUTADA_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '30';

    /**
     * Isenta
     */
    const ISENTA = '40';

    /**
     * Não tributada
     */
    const NAO_TRIBUTADA = '41';

    /**
     * Suspensão
     */
    const SUSPENSAO = '50';

    /**
     * Diferimento
     */
    const DIFERIMENTO = '51';

    /**
     * Tributação monofásica sobre combustíveis com recolhimento diferido
     */
    const TRIBUTACAO_MONOFASICA_COMBUSTIVEIS_RECOLHIMENTO_DIFERIDO = '53';

    /**
     * ICMS cobrado anteriormente por substituição tributária
     */
    const ICMS_COBRADO_ANTERIORMENTE_SUBSTITUICAO_TRIBUTARIA = '60';

    /**
     * Tributação monofásica sobre combustíveis cobrada anteriormente
     */
    const TRIBUTACAO_MONOFASICA_COMBUSTIVEIS_COBRADA_ANTERIORMENTE = '61';

    /**
     * Com redução de base de cálculo e cobrança do ICMS por substituição tributária
     */
    const COM_REDUCAO_BASE_CALCULO_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '70';

    /**
     * Outros
     */
    const OUTROS = '90';

    /**
     * Tributada pelo Simples Nacional com permissão de crédito
     */
    const TRIBUTADA_SIMPLES_NACIONAL_PERMISSAO_CREDITO = '101';

    /**
     * Tributada pelo Simples Nacional sem permissão de crédito
     */
    const TRIBUTADA_SIMPLES_NACIONAL_SEM_PERMISSAO_CREDITO = '102';

    /**
     * Isenção do ICMS  no Simples Nacional para faixa de receita bruta
     */
    const ISENCAO_ICMS_SIMPLES_NACIONAL_FAIXA_RECEITA_BRUTA = '103';

    /**
     * Imune
     */
    const IMUNE = '300';

    /**
     * Não tributada pelo Simples Nacional
     */

    const NAO_TRIBUTADA_SIMPLES_NACIONAL = '400';

    /**
     * Tributada pelo Simples Nacional com permissão de crédito e com cobrança do ICMS por Substituição Tributária
     */
    const TRIBUTADA_SIMPLES_NACIONAL_PERMISSAO_CREDITO_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '201';

    /**
     * Tributada pelo Simples Nacional sem permissão de crédito e com cobrança do ICMS por Substituição Tributária
     */
    const TRIBUTADA_SIMPLES_NACIONAL_SEM_PERMISSAO_CREDITO_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '202';

    /**
     * Isenção do ICMS nos Simples Nacional para faixa de receita bruta e com cobrança do ICMS por Substituição Tributária
     */
    const ISENCAO_ICMS_SIMPLES_NACIONAL_FAIXA_RECEITA_BRUTA_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA = '203';
    
    /**
     * ICMS cobrado anteriormente por substituição tributária (substituído) ou por antecipação
     */
    const ICMS_COBRADO_ANTERIORMENTE_SUBSTITUICAO_TRIBUTARIA_SUBSTITUIDO_OU_ANTICIPACAO = '500';

    /**
     * segundo codigo outros
     */
    const OUTROS_2 = '900';
    
    const DESCRICOES = [
        self::TRIBUTADA_INTEGRALMENTE => 'Tributada integralmente',
        self::TRIBUTACAO_MONOFASICA_PROPRIA_COMBUSTIVEIS => 'Tributação monofásica própria sobre combustíveis',
        self::TRIBUTADA_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA => 'Tributada e com cobrança do ICMS por substituição tributária',
        self::TRIBUTACAO_MONOFASICA_PROPRIA_COM_RESPONSAVEL_RETENCAO_COMBUSTIVEIS => 'Tributação monofásica própria e com responsabilidade pela retenção sobre combustíveis',
        self::COM_REDUCAO_BASE_CALCULO => 'Com redução de base de cálculo',
        self::ISENTA_NAO_TRIBUTADA_COM_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA => 'Isenta ou não tributada e com cobrança do ICMS por substituição tributária',
        self::ISENTA => 'Isenta',
        self::NAO_TRIBUTADA => 'Não tributada',
        self::SUSPENSAO => 'Suspensão',
        self::DIFERIMENTO => 'Diferimento',
        self::TRIBUTACAO_MONOFASICA_COMBUSTIVEIS_RECOLHIMENTO_DIFERIDO => 'Tributação monofásica sobre combustíveis com recolhimento diferido',
        self::ICMS_COBRADO_ANTERIORMENTE_SUBSTITUICAO_TRIBUTARIA => 'ICMS cobrado anteriormente por substituição tributária',
        self::TRIBUTACAO_MONOFASICA_COMBUSTIVEIS_COBRADA_ANTERIORMENTE => 'Tributação monofásica sobre combustíveis cobrada anteriormente',
        self::COM_REDUCAO_BASE_CALCULO_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA => 'Com redução de base de cálculo e cobrança do ICMS por substituição tributária',
        self::OUTROS => 'Outros',
        self::TRIBUTADA_SIMPLES_NACIONAL_PERMISSAO_CREDITO => 'Tributada pelo Simples Nacional com permissão de crédito',
        self::TRIBUTADA_SIMPLES_NACIONAL_SEM_PERMISSAO_CREDITO => 'Tributada pelo Simples Nacional sem permissão de crédito',
        self::ISENCAO_ICMS_SIMPLES_NACIONAL_FAIXA_RECEITA_BRUTA => 'Isenção do ICMS  no Simples Nacional para faixa de receita bruta',
        self::IMUNE => 'Imune',
        self::NAO_TRIBUTADA_SIMPLES_NACIONAL => 'Não tributada pelo Simples Nacional',
        self::TRIBUTADA_SIMPLES_NACIONAL_PERMISSAO_CREDITO_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA => 'Tributada pelo Simples Nacional com permissão de crédito e com cobrança do ICMS por Substituição Tributária',
        self::TRIBUTADA_SIMPLES_NACIONAL_SEM_PERMISSAO_CREDITO_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA => 'Tributada pelo Simples Nacional sem permissão de crédito e com cobrança do ICMS por Substituição Tributária',
        self::ISENCAO_ICMS_SIMPLES_NACIONAL_FAIXA_RECEITA_BRUTA_COBRANCA_ICMS_SUBSTITUICAO_TRIBUTARIA => 'Isenção do ICMS nos Simples Nacional para faixa de receita bruta e com cobrança do ICMS por Substituição Tributária',
        self::ICMS_COBRADO_ANTERIORMENTE_SUBSTITUICAO_TRIBUTARIA_SUBSTITUIDO_OU_ANTICIPACAO => 'ICMS cobrado anteriormente por substituição tributária (substituído) ou por antecipação',
        self::OUTROS_2 => 'Outros',
    ];

}