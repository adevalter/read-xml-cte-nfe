<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Cobranca\Fatura;

use Xml\Util\Models\Traits\Atributes;


class Fatura {
    use Atributes;

    private object $xml;
    public string | null $numero_fatura;
    public float | null $valor_original;
    public float | null $valor_desconto;
    public float | null $valor_liquido;


    protected $tipos_float = [
        'valor_original',
        'valor_desconto',
        'valor_liquido',
    ];

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'numero_fatura' => 'nfat',
            'valor_original' => 'vorig',
            'valor_desconto' => 'vdesc',
            'valor_liquido' => 'vliq',
        ]);

    }

}
