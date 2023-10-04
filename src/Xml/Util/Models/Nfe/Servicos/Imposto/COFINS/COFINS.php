<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Imposto\COFINS;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Traits\COFINS as COFINSTraits;

class COFINS {
    use Atributes, COFINSTraits;

    private object $xml;
    private string $grupo;


    protected $tipos_int = [
    ];

    protected $tipos_float = [
        'valor_da_base_de_calculo',
        'percentual_aliquota_do_cofins',
        'valor_do_cofins',
        'quantidade_vendida',
        'aliquota_do_cofins_em_reais',
    ];

    protected $tipos_bool = [
        'valor_soma_cofins_compoe_total_nota'
    ];
    

    function __construct( object $xml, string $grupo){

        $this->xml = $xml;
        $this->grupo = $grupo;

        $this->getAtribute([
            'codigo_situacao_tributaria' => 'cst',
            'valor_da_base_de_calculo' => 'vbc',
            'percentual_aliquota_do_cofins' => 'pcofins',
            'valor_do_cofins' => 'vcofins',
            'quantidade_vendida' => 'qbcprod',
            'aliquota_do_cofins_em_reais' => 'valiqprod',
            'valor_soma_cofins_compoe_total_nota' => 'indsomaconfinsst'
        ]);
        
    }

}
