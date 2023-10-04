<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Transporte;

use Xml\Util\Models\Traits\Atributes;


class Transportadora {
    use Atributes;

    private object $xml;
    public string | null $cnpj;
    public string | null $nome;
    public string | null $endereco;
    public string | null $municipio;
    public string | null $uf;
    public string | null $inscricao_estadual;


    protected $tipos_int = [
    ];

    protected $tipos_float = [
    ];

    function __construct( object $xml){
        $this->xml = $xml;
        $this->getAtribute([
            'cnpj'  => 'cnpj',
            'nome'  => 'xnome',
            'endereco'  => 'xender',
            'municipio'  => 'xmun',
            'uf'  => 'uf',
            'inscricao_estadual'  => 'ie',
        ]);

    }

}
