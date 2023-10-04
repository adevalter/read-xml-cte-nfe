<?php
declare(strict_types=1);

namespace Xml\Util\Models;

class CobrancaNfe {


    private object $xml;

    public object $fatura;
    public array $duplicatas;
    public int $total_dublicatas;
    public float $soma_dublicatas;


    public array $duplicata_vencida;

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getFatura();

        $this->getDuplicatas();
  
    }

    private function getFatura() :void
    {
        $this->fatura = new \stdClass();

        if( isset($this->xml->fat) ){
            $this->fatura->numero_fatura  = trim( (string) $this->xml->fat->nfat );
            $this->fatura->valor_original = (float) trim( (string) $this->xml->fat->vorig );
            $this->fatura->valor_desconto = (float) trim( (string) $this->xml->fat->vdesc );
            $this->fatura->valor_loquido  = (float) trim( (string) $this->xml->fat->vliq );
        }
    
    }

    private function getDuplicatas() :void
    {        

        $this->duplicatas = [];
        $this->total_dublicatas = 0;
        $this->duplicata_vencida = [];
        $this->soma_dublicatas = 0;

        if( isset($this->xml->dup)){

            $this->total_dublicatas = count($this->xml->dup);
       
            if( $this->total_dublicatas > 0){

                foreach ($this->xml->dup as $key => $dup) {

                    $duplicata_obj = new \stdClass();
                    $duplicata_obj->numero = trim( (string) $dup->ndup );
                    $duplicata_obj->data_vencimento = trim( (string) $dup->dvenc );
                    $duplicata_obj->valor = (float) trim( (string) $dup->vdup );

                    $this->soma_dublicatas += (float) $duplicata_obj->valor;

                    $this->duplicatas[] = $duplicata_obj;

                }

            }

        }

    }

    /**
    * Faz a converssão de classe php para Object.
    *
    *
    * @return object
    */
    public function toObject(){
        $return = new \stdClass();
       
        $return->fatura = $this->fatura;
        $return->soma_dublicatas = $this->soma_dublicatas;
        $return->duplicatas = $this->duplicatas;
        $return->duplicata_vencida = $this->duplicata_vencida;
        $return->total_dublicatas = $this->total_dublicatas;


        return $return;
    }

}
