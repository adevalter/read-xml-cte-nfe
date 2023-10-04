<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Imposto\Importacao;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Traits\Importacao as ImportacaoTraits;

class Importacao {
    use Atributes, ImportacaoTraits;


    private object $xml;

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'valor_base_imposto_importacao' => 'vbc',
            'valor_das_despesas_aduaneiras' => 'vdespadu',
            'valor_imposto_importacao' => 'vii',
            'valor_iof' => 'viof',
        ]);
        
    }

}
