<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Transporte;

use Xml\Util\Models\Traits\Atributes;


class Volume {
    use Atributes;

    private object $xml;
    public $quantidade_volumes;
    public $peso_liquido;
    public $peso_bruto;


    protected $tipos_int = [
        'quantidade_volumes'
    ];

    protected $tipos_float = [
        'peso_liquido',
        'peso_bruto',
    ];

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'quantidade_volumes'  => 'qvol',
            'peso_liquido'  => 'pesol',
            'peso_bruto'  => 'pesob',
        ]);

    }

}
