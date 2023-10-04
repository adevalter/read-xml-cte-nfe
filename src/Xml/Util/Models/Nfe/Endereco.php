<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe;

use Xml\Util\Models\Traits\Atributes;


class Endereco {
    use Atributes;

    private object $xml;
    public string | null $logradouro;
    public string | null $numero;
    public string | null $complemento;
    public string | null $bairro;
    public string | null $nome_municipio;
    public string | null $nome_pais;
    public string | null $cep;
    public string | null $uf;
    public string | null $fone;
    public string | null $email;
    public int | null $codigo_municipio;
    public int | null $codigo_pais;


    protected $tipos_int = [
        'codigo_municipio',
        'codigo_pais',
    ];

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([

            'logradouro' => 'xlgr',
            'numero' => 'nro',
            'complemento' => 'xcpl',
            'bairro' => 'xbairro',
            'codigo_municipio' => 'cmun',
            'nome_municipio' => 'xmun',
            'codigo_pais' => 'cpais',
            'nome_pais' => 'xpais',
            'cep' => 'cep', 
            'uf' => 'uf', 
            'fone' => 'fone', 
            'email' => 'email',

        ]);

    }

}
