<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos;

use Xml\Util\Models\Nfe\Servicos\ItensServico;
use Xml\Util\Models\Traits\Atributes;

class Servicos {
    use Atributes;

    private object $xml;
    public array $items = [];


    function __construct( object $xml){

        $this->xml = $xml;

        $this->getItems();

    }

    private function getItems() :void
    {   
        foreach($this->xml as $value){
            $itens = new ItensServico($value);
            $this->items[] =  $itens->toObject();
        }
       
    }

}
