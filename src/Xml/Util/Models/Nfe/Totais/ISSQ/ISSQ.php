<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Totais\ISSQ;

use Xml\Util\Models\Traits\Atributes;

/**
 * Dados do COFINS da Substituição Tributaria;
 */
class ISSQ {
    use Atributes;

    private object $xml;

    public float | null $base_calculo_icms;

    protected $tipos_float = [
        'valor_total_serviços_nao_tributados_icms',
        'base_calculo_issq',
        'valor_total_issq',
        'valor_total_pis',
        'valor_total_cofins',
        'valor_deducao_reducao_base_calculo',
        'valor_outras_retencoes',
        'valor_desconto_incondicionado',
        'valor_desconto_condicionado',
        'valor_total_retencao_issq',
    ];

    protected $tipos_int = [
        'codigo_regime_especial_tributacao',
    ];
    
    protected $tipos_data = [
        'data_prestacao_servico',
    ];

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'valor_total_serviços_nao_tributados_icms' => 'vserv',
            'base_calculo_issq' => 'vbc',
            'valor_total_issq' => 'viss',
            'valor_total_pis' => 'vpis',
            'valor_total_cofins' => 'vcofins',
            'valor_deducao_reducao_base_calculo' => 'vdeducao',
            'valor_outras_retencoes' => 'voutro',
            'valor_desconto_incondicionado' => 'vdescincond',
            'valor_desconto_condicionado' => 'vdescond',
            'valor_total_retencao_issq' => 'vissret',
            'data_prestacao_servico' => 'dcompet',
            'codigo_regime_especial_tributacao' => 'cregtrib',
        ]);
        
    }


}
