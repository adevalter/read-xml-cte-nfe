<?php

namespace Xml\Util\Models\Traits;

trait Atributes
{
    private function getAtribute(array $atributes, $obj_xml = null) :void
    {

        $xml = $obj_xml ?? $this->xml;

        foreach($atributes as $atribute => $tag){
            if( isset($xml->$tag) ){

                if( $this->ajustTtpes($atribute, $xml->$tag) ){
                    continue;
                }
                
                $this->$atribute = trim( (string) $xml->$tag );
            }else{
                $this->$atribute = null;
            }
        }

    }

    private function ajustTtpes($atribute, $valor)
    {
        if(isset($this->tipos_int)){
            if( in_array($atribute, $this->tipos_int) ){
                $this->$atribute = (int) trim( (string) $valor );
                return true;
            }
        }

        if(isset($this->tipos_float)){
            if( in_array($atribute, $this->tipos_float) ){
                $this->$atribute = (float) trim( (string) $valor );
                return true;
            }
        }

        if(isset($this->tipos_bool)){
            if( in_array($atribute, $this->tipos_bool) ){
                $this->$atribute = (bool) trim( (string) $valor );
                return true;
            }
        }

        if(isset($this->tipos_data)){
            if( in_array($atribute, $this->tipos_data) ){
                $date_formated = new \DateTime( trim( (string) $valor ));
                $this->$atribute = $date_formated->format('Y-m-d H:i:s');
                return true;
            }
        }

        return false;
    }
    
    public function toArray()
    {
        return get_object_vars($this);
    }

    public function toObject()
    {
        $retorno = $this->toArray();

        unset($retorno['xml']);

        if(isset($retorno['tipos_float'])){
            unset($retorno['tipos_float']);
        }

        if(isset($retorno['tipos_int'])){
            unset($retorno['tipos_int']);
        }

        if(isset($retorno['tipos_bool'])){
            unset($retorno['tipos_bool']);
        }

        if(isset($retorno['tipos_data'])){
            unset($retorno['tipos_data']);
        }

        if(isset($retorno['type'])){
            unset($retorno['type']);
        }
        
        return (object) $retorno;
    }

}
