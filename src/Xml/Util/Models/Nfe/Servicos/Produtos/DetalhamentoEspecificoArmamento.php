<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos;

use Xml\Util\Models\Traits\Atributes;


class DetalhamentoEspecificoArmamento {
    use Atributes;

    private object $xml;
    public string | null $tipo_armamento;
    public string | null $numero_serie_armamento;
    public string | null $numero_serie_cano;
    public string | null $descricao;

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'tipo_armamento' => 'tparma',
            'numero_serie_armamento' => 'nserie',
            'numero_serie_cano' => 'ncano',
            'descricao' => 'descr',
        ]);
    }

}
