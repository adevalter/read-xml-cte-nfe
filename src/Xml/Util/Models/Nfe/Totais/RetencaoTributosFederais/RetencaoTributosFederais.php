<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Totais\RetencaoTributosFederais;

use Xml\Util\Models\Traits\Atributes;


class RetencaoTributosFederais {
    use Atributes;

    private object $xml;

    public float | null $valor_retido_pis;
    public float | null $valor_retido_cofins;
    public float | null $valor_retido_csll;
    public float | null $base_do_calculo_irrf;
    public float | null $valor_retido_irrf;
    public float | null $base_do_calculo_ret_prev;
    public float | null $valor_retido_prev;
    

    protected $tipos_float = [
        'valor_retido_pis',
        'valor_retido_cofins',
        'valor_retido_csll',
        'base_do_calculo_irrf',
        'valor_retido_irrf',
        'base_do_calculo_ret_prev',
        'valor_retido_prev',
    ];

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'valor_retido_pis' => 'vretpis',
            'valor_retido_cofins' => 'vretcofins',
            'valor_retido_csll' => 'vretcsll',
            'base_do_calculo_irrf' => 'vbcirrf',
            'valor_retido_irrf' => 'virrf',
            'base_do_calculo_ret_prev' => 'vbcretprev',
            'valor_retido_prev' => 'vretprev',
        ]);
        
    }

}
