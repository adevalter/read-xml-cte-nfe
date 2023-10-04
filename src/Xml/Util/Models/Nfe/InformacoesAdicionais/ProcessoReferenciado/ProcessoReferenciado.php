<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\InformacoesAdicionais\ProcessoReferenciado;

use Xml\Util\Models\Traits\Atributes;

class ProcessoReferenciado {
    use Atributes;

    private object $xml;

    public string | null $identificacao_do_processo;
    public int | null $indicador_da_origem_do_processo;
    public string | null $tipo_de_procedimento;

    protected $tipos_int = [
        'indicador_da_origem_do_processo'
    ];

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'identificacao_do_processo' => 'nproc',
            'indicador_da_origem_do_processo' => 'indproc',
            'tipo_de_procedimento' => 'procemi',
        ]);
        
    }

}
