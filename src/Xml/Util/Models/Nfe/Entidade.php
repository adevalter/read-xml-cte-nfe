<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe;

use Xml\Util\Models\Nfe\Endereco;
use Xml\Util\Models\Traits\Atributes;


class Entidade {
    use Atributes;

    private object $xml;
    private string $type;
    public string | null $cnpj;
    public string | null $inscricao_estadual;
    public string | null $nome;
    public string | null $fone;
    public string | null $email;
    public string | null $inscricao_municipal;
    public string | null $cnae;
    public int | null $codigo_regime_tributario;

    protected $tipos_int = [
        'codigo_regime_tributario',
    ];

    protected $tipos_float = [];


    public Endereco $endereco;


    function __construct( object $xml, string $type){

        $this->xml = $xml;

        $ender = 'ender';

        $this->type = $ender.$type;

        $this->getAtribute([

            'nome' => 'xnome',
            'nome_fantasia' => 'xFant',
            'cnpj' => 'cnpj',
            'cpf' => 'cpf',
            'inscricao_estadual' => 'ie',
            'codigo_regime_tributario'  => 'crt',
            'fone' => 'fone',
            'email' => 'email',
            'inscricao_municipal' => 'im',
            'cnae' => 'cnae',


        ]);
        
        $this->getEndereco();
    }

    private function getEndereco() :void
    {

        $type = $this->type;
        $this->endereco = new Endereco( $this->xml->$type );

    }
    
}
