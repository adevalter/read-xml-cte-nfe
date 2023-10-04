<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\InformacoesAdicionais;

use Xml\Util\Models\Nfe\InformacoesAdicionais\ProcessoReferenciado\ProcessoReferenciado;
use Xml\Util\Models\Traits\Atributes;

class InformacoesAdicionais {
    use Atributes;

    private object $xml;

    public string | null $informacoes_adicionais_interesse_fisco;
    public string | null $informacoes_adicionais_contribuinte;

    public array | null $processo_referenciado;

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'informacoes_adicionais_interesse_fisco' => 'infadfisco',
            'informacoes_adicionais_contribuinte' => 'infcpl'
        ]);

        $this->getProcessoReferenciado();

    }

    public function getProcessoReferenciado()
    {
        if($this->xml->procref && $this->xml->procRef->procrefitem){

            foreach ($this->xml->procRef->procrefitem as $key => $ref) {
                $processos = new ProcessoReferenciado($ref);
                $this->processo_referenciado[] = $processos->toObject();
            }


        }
    }


}
