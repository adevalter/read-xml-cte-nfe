<?php

namespace Xml\Util\Models\Traits;

trait ISSQN
{
    public float | null $valor_da_base_de_calculo;
    public float | null $valor_aliquota_do_isssqn;
    public float | null $valor_deducao;
    public float | null $valor_outras_retencoes;
    public float | null $valor_desconto_condicionado;
    public float | null $valor_desconto_incondicionado;
    public float | null $valor_de_iss_retido;
    public int | null $indicador_de_iss_retido;

    public string | null $codigo_municipio_gerador_do_issqn;
    public string | null $codigo_item_lista_servicos;
    public string | null $codigo_servico;
    public string | null $codigo_municipio;
    public string | null $codigo_pais;
    public string | null $numero_processo;



    public function toArray(){
        return get_object_vars($this);
    }

    /**
    * Faz a converssão de classe php para Object.
    *
    *
    * @return object
    */
    public function toObject(){
        $return = new \stdClass();

        $grupo = $this->grupo;
        if($grupo){
            $return->$grupo = new \stdClass();
        }


        $array = $this->toArray();
        foreach ($array as $key => $value) {
            
            if(gettype($value) == 'array' || gettype($value) == 'object'){
                continue;
            }
            if($key == 'grupo'){
                continue;
            }

            if($value){

                if(gettype($value) === 'float'){
                    if($grupo){
                        $return->$grupo->$key = (float) $value;
                        continue;
                    }

                    $return->$key = (float) $value;
                    continue;
                    
                }

                if(gettype($value) === 'int'){
                    if($grupo){
                        $return->$grupo->$key = (int) $value;
                        continue;
                    }

                    $return->$key = (int) $value;
                    continue;
                    
                }
                
                if($grupo){
                    $return->$grupo->$key = $value;
                    continue;
                }

            }

            $return->$key = $value;
        }

        return $return;
    }
}
