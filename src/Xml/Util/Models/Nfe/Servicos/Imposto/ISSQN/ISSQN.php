<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Imposto\COFINS;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Traits\ISSQN as ISSQNTraits;


/**
 * Informar os campos para cálculo do ISSQN nas NF-e conjugadas, 
 * onde há a prestação de serviços sujeitos ao ISSQN e fornecimento de peças sujeitas ao ICMS. 
 * OBS: Nota Fiscal Conjugada depende de prévio convênio ou protocolo de cooperação entre a SEFAZ e cada prefeitura municipal.
 * 
 * O grupo de ISSQN é mutuamente exclusivo com os grupos ICMS, IPI e II, 
 * isto é se ISSQN for informado os grupos ICMS, IPI e II não serão informados e vice-versa.
 */
class ISSQN {
    use Atributes, ISSQNTraits;

    const SIM = 1;
    const NAO = 2;

    private object $xml;
    private string $grupo;

    protected $tipos_int = [
        'indicador_de_iss_retido',
        'indicador_de_incentivo_fiscal'
    ];

    protected $tipos_float = [
        'valor_da_base_de_calculo',
        'valor_aliquota_do_isssqn',
        'valor_deducao',
        'valor_outras_retencoes',
        'valor_desconto_condicionado',
        'valor_desconto_incondicionado',
        'valor_de_iss_retido'
    ];

    protected $tipos_boolean = [
        
    ];
    

    function __construct( object $xml, string $grupo){

        $this->xml = $xml;
        $this->grupo = $grupo;

        $this->getAtribute([
            'valor_da_base_de_calculo' => 'vbc',
            'valor_aliquota_do_isssqn' => 'vissqn',
            'valor_deducao' => 'deducao',
            'valor_outras_retencoes' => 'voutro',
            'valor_desconto_condicionado' => 'vdesccond',
            'valor_desconto_incondicionado' => 'vdescincond',
            'valor_de_iss_retido' => 'vissret',
            'indicador_de_incentivo_fiscal' => 'indincentivo',
            'indicador_de_iss_retido' => 'indiss',
            'codigo_municipio_gerador_do_issqn' => 'cmunfg',
            'codigo_item_lista_servicos' => 'clistserv',
            'codigo_servico' => 'cservico',
            'codigo_municipio' => 'cmun',
            'codigo_pais' => 'cpais',
            'numero_processo' => 'nprocesso',

        ]);
        
    }

}
