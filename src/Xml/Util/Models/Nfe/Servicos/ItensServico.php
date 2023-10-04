<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Nfe\Servicos\Produtos\Produto;
use Xml\Util\Models\Nfe\Servicos\Imposto\Imposto;
use Xml\Util\Models\Nfe\Servicos\ImpostoDevolucao\ImpostoDevolucao;


class ItensServico {
    use Atributes;

    private object $xml;
    public object $produto;
    public object $imposto;
    public object | null $imposto_devolucao = null;

    protected $tipos_int = [

    ];

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getProduto();
        $this->getImposto();
        $this->getImpostoDevolucao();

    }

    public function getProduto(): void
    {
        $produto = new Produto($this->xml->prod);
        $this->produto = $produto->toObject();
    }

    public function getImposto(): void
    {
        $imposto = new Imposto($this->xml->imposto);
        $this->imposto = $imposto->toObject();
    }

    public function getImpostoDevolucao(): void
    {
        $imposto = new ImpostoDevolucao($this->xml->impostoDevol);
        $this->imposto_devolucao = $imposto->toObject();
    }

}
