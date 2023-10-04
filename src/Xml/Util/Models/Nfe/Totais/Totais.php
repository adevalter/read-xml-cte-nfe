<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Totais;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Nfe\Totais\ICMS\ICMS;
use Xml\Util\Models\Nfe\Totais\ISSQ\ISSQ;
use Xml\Util\Models\Nfe\Totais\RetencaoTributosFederais\RetencaoTributosFederais;

class Totais {
    use Atributes;

    private object $xml;

    public object | null $icms = null;
    public object | null $issq = null;
    public object | null $retencao_tributos_federais = null;


    function __construct( object $xml){

        $this->xml = $xml;

        $this->getTotaisICMS();
        $this->getTotaisISSQ();
        $this->getTotaisRetencaoTributosFederais();
    }

    public function getTotaisICMS()
    {
        if(!$this->xml->icmstot){
            return;
        }

        $icms = new ICMS($this->xml->icmstot);
        $this->icms = $icms->toObject();
    }

    public function getTotaisISSQ()
    {   
        if(!$this->xml->issqntot){
            return;
        }

        $issq = new ISSQ($this->xml->issqntot);
        $this->issq = $issq->toObject();
    }
    
    public function getTotaisRetencaoTributosFederais()
    {
        if(!$this->xml->rettrib){
            return;
        }

        $retencao_tributos_federais = new RetencaoTributosFederais($this->xml->rettrib);
        $this->retencao_tributos_federais = $retencao_tributos_federais->toObject();
    }

}
