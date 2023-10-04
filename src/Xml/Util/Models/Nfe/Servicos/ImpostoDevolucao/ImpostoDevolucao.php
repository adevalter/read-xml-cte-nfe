<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\ImpostoDevolucao;

use Xml\Util\Models\Traits\Atributes;


class ImpostoDevolucao {
    use Atributes;

    private object $xml;

    public float | null $percentual_de_mercadoria_devolvida;
    public float | null $valor_do_ipi_devolvido;

    protected $tipos_float = [
        'percentual_de_mercadoria_devolvida',
        'valor_do_ipi_devolvido'
    ];

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'percentual_de_mercadoria_devolvida' => 'pdevol',
        ]);
    
        $this->getIPIDevolucao();
    }

    public function getIPIDevolucao()
    {

        $this->getAtribute([
            'valor_do_ipi_devolvido' => 'vipidevol',
        ], $this->xml->ipidevol);

    }

}
