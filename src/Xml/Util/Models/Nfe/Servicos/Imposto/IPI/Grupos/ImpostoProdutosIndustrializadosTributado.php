<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Imposto\IPI\Grupos;

use Xml\Util\Models\Traits\Atributes;


class ImpostoProdutosIndustrializadosTributado {
    use Atributes;

    private object $xml;
    public string | null $codigo_situacao_tributaria;
    public float | null $valor_bc_ipi;
    public float | null $aliquota_ipi;
    public float | null $valor_ipi_ser_pago;

    protected $tipos_float = [
        'valor_bc_ipi',
        'aliquota_ipi',
        'valor_ipi_ser_pago',
    ];

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'codigo_situacao_tributaria' => 'cst',
            'valor_bc_ipi' => 'vbc',
            'aliquota_ipi' => 'pipi',
            'valor_ipi_ser_pago' => 'vipi',
        ]);
    }

    /**
    * Faz a converssão de classe php para Object.
    *
    *
    * @return object
    */
    public function toObject(){
        $return = new \stdClass();
        $return->codigo_situacao_tributaria = $this->codigo_situacao_tributaria;
        $return->valor_bc_ipi = $this->valor_bc_ipi;
        $return->aliquota_ipi = $this->aliquota_ipi;
        $return->valor_ipi_ser_pago = $this->valor_ipi_ser_pago;

        return $return;
    }

}
