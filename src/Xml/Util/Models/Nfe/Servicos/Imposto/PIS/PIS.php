<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Imposto\PIS;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Traits\PIS as PISTraits;

class PIS {
    use Atributes, PISTraits;

    private object $xml;
    private string $grupo;


    protected $tipos_int = [
    ];

    protected $tipos_float = [
        'valor_da_base_de_calculo',
        'percentual_aliquota_do_pis',
        'valor_do_pis',
        'quantidade_vendida',
        'aliquota_do_pis_em_reais',
    ];

    protected $tipos_bool = [
        'valor_soma_pis_compoe_total_nota'
    ];
    

    function __construct( object $xml, string $grupo){

        $this->xml = $xml;
        $this->grupo = $grupo;

        $this->getAtribute([
            'codigo_situacao_tributaria' => 'cst',
            'valor_da_base_de_calculo' => 'vbc',
            'percentual_aliquota_do_pis' => 'ppis',
            'valor_do_pis' => 'vpis',
            'quantidade_vendida' => 'qbcprod',
            'aliquota_do_pis_em_reais' => 'valiqprod',
            'valor_soma_pis_compoe_total_nota' => 'indsomapisst'
        ]);
        
    }

}
