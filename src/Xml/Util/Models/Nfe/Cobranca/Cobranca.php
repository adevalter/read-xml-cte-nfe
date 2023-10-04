<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Cobranca;

use Xml\Util\Models\Nfe\Cobranca\Fatura\Fatura;
use Xml\Util\Models\Nfe\Cobranca\Duplicata\Duplicata;
use Xml\Util\Models\Traits\Atributes;


/**
 * Dados da cobrança da NF-e
 */
class Cobranca {

    use Atributes;

    private object $xml;

    public object | null $fatura;
    public array | null $duplicatas;
    public int | null $total_de_dublicatas;
    public float | null $soma_dublicatas;

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getFatura();

        $this->getDuplicatas();
  
    }

    private function getFatura() :void
    {
        $fatura = new Fatura($this->xml->fat);
        $this->fatura = $fatura->toObject();
    }

    private function getDuplicatas() :void
    {        
        $duplicatas = [];
        $total_de_dublicatas = 0;
        $soma_dublicatas = 0;

        foreach($this->xml->dup as $dup){
            $duplicata = new Duplicata($dup);
            $duplicatas[] = $duplicata->toObject();
            $total_de_dublicatas++;
            $soma_dublicatas += $duplicata->Valor_duplicata;
        }

        $this->duplicatas = $duplicatas;
        $this->total_de_dublicatas = $total_de_dublicatas;
        $this->soma_dublicatas = $soma_dublicatas;
    }


}
