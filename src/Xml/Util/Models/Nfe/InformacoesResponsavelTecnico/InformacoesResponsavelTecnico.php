<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\InformacoesResponsavelTecnico;

use Xml\Util\Models\Traits\Atributes;

class InformacoesResponsavelTecnico {
    use Atributes;

    private object $xml;

    public string | null $cnpj;
    public string | null $contato;
    public string | null $email;
    public string | null $telefone;

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'cnpj' => 'cnpj',
            'contato' => 'xcontato',
            'email' => 'email',
            'telefone' => 'fone',
        ]);

    }



}
