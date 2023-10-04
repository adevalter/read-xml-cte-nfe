<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Cobranca\Duplicata;

use Xml\Util\Models\Traits\Atributes;


class Duplicata {
    use Atributes;

    private object $xml;
    public float | null $Valor_duplicata;


    protected $tipos_float = [
        'Valor_duplicata'
    ];

    protected $tipos_int = [
        'numero_duplicata'
    ];

    protected $tipos_data = [
        'data_vencimento'
    ];


    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'Valor_duplicata' => 'vdup',
            'data_vencimento' => 'dvenc',
            'numero_duplicata' => 'ndup'
        ]);

    }

}
