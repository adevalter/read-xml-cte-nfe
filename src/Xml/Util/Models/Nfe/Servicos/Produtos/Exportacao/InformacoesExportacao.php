<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos\Exportacao;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Nfe\Servicos\Produtos\Exportacao\ExportacaoIndireta;


class InformacoesExportacao {
    use Atributes;

    private object $xml;
    public string | null $numero_draw;

    public object | null $exportacao_indireta = null;

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'numero_draw' => 'ndraw',
        ]);

        $this->getExportacaoIndireta();
    }

    public function getExportacaoIndireta()
    {
        // if($this->xml->exportind){
            $model = new ExportacaoIndireta($this->xml->exportind);
            $this->exportacao_indireta = $model->toObject();
        // }
        
    }

}
