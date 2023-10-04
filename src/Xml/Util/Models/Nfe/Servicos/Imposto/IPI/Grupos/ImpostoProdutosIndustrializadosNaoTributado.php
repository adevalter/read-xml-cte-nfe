<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Imposto\IPI\Grupos;

use Xml\Util\Models\Traits\Atributes;


class ImpostoProdutosIndustrializadosNaoTributado {
    use Atributes;

    private object $xml;
    public string | null $codigo_situacao_tributaria;

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'codigo_situacao_tributaria' => 'cst',
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

        return $return;
    }

}
