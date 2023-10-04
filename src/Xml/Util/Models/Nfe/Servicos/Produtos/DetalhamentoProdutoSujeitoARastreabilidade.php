<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos;

use Xml\Util\Models\Traits\Atributes;


class DetalhamentoProdutoSujeitoARastreabilidade {
    use Atributes;

    private object $xml;
    public string | null $nomero_lote;
    public string | null $quantidade_lote;
    public string | null $data_fabricacao;
    public string | null $data_validade;
    public string | null $codigo_agregacao;


    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'nomero_lote' => 'nlote',
            'quantidade_lote' => 'qlote',
            'data_fabricacao' => 'dfab',
            'data_validade' => 'dval',
            'codigo_agregacao' => 'cagreg',

        ]);
    }

}
