<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Transporte;

use Xml\Util\Models\Traits\Atributes;

use Xml\Util\Models\Nfe\Transporte\Volume;
use Xml\Util\Models\Nfe\Transporte\Transportadora;
use Xml\Util\Models\Nfe\Enums\Transporte\ModalidadeFrete;


class Transporte {
    use Atributes;

    private object $xml;
    public int $modo_de_frete;
    public string $descricao_modo_de_frete;
    public object | null $volume = null;


    protected $tipos_int = [
        'modo_de_frete',
    ];

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'modo_de_frete'  => 'modfrete',
        ]);

        $this->getVolume();
        $this->getTransportadora();

        $this->descricao_modo_de_frete = ModalidadeFrete::getDescricao($this->modo_de_frete);

    }

    public function getVolume()
    {
        if($this->modo_de_frete !== ModalidadeFrete::SEM_OCORRENCIA_DE_TRANSPORTE){
            $volume = new Volume($this->xml->vol);
            $this->volume = $volume->toObject();
        }

    }

    public function getTransportadora()
    {
        if($this->modo_de_frete !== ModalidadeFrete::SEM_OCORRENCIA_DE_TRANSPORTE){
            $transportadora = new Transportadora($this->xml->transporta);
            $this->transportadora = $transportadora->toObject();
        }

    }

}
