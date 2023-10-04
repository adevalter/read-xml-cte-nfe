<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos\Exportacao;

use Xml\Util\Models\Traits\Atributes;


class ExportacaoIndireta {
    use Atributes;

    private object $xml;
    public string | null $numero_registro_exportacao;
    public string | null $chave_nfe_para_exportacao;
    public float | null $quantidade_items_relmente_exportados;

    protected $tipos_float = [
        'quantidade_items_relmente_exportados'
    ];

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'numero_registro_exportacao' => 'nre',
            'chave_nfe_para_exportacao' => 'chNFe',
            'quantidade_items_relmente_exportados' => 'qExport',
        ]);
    }
}
