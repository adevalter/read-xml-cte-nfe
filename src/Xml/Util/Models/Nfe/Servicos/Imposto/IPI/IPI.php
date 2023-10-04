<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Imposto\IPI;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Nfe\Servicos\Imposto\IPI\Grupos\ImpostoProdutosIndustrializadosTributado;
use Xml\Util\Models\Nfe\Servicos\Imposto\IPI\Grupos\ImpostoProdutosIndustrializadosNaoTributado;
use Xml\Util\Models\Traits\IPI as IPITraits;

class IPI {
    use Atributes, IPITraits;

    
    const TIPO_IPI_TRIBUTADO = 1;
    const TIPO_IPI_NAO_TRIBUTADO = 2;

    private object $xml;

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'codigo_de_enquadramento_legal' => 'cenq',
            'cnpj_produtor' => 'cnpjprod',
            'codigo_selo' => 'cselo',
            'quantidade_selo' => 'qselo',
            'codigo_enquadramento_para_cigarros_bebidas' => 'cienq'
            
        ]);

        $this->getGrupoClassificacaoEpi();
        
    }

    public function getGrupoClassificacaoEpi()
    {

        if($this->xml->ipitrib){
            $ipi_tributado = new ImpostoProdutosIndustrializadosTributado($this->xml->ipitrib);
            $this->ipi_tributado = $ipi_tributado->toObject();
        }else{
            $ipi_nao_tributado = new ImpostoProdutosIndustrializadosNaoTributado($this->xml->ipint);
            $this->ipi_nao_tributado = $ipi_nao_tributado->toObject();
        }
        
    }

}
