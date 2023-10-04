<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos;

use Xml\Util\Models\Traits\Atributes;


class GrupoDeclaracaoImportacao {
    use Atributes;

    private object $xml;
    public string | null $numero_declaracao_importacao;
    public string | null $data_registro;
    public string | null $local_desembaraco;
    public string | null $uf_desembaraco;
    public string | null $codigo_exportador;
    public string | null $data_desembaraco;
    public string | null $cnpj_adquirente;
    public string | null $uf_adquirente;

    public int | null $via_transporte;
    public int | null $tipo_intermediacao;

    public float | null $valor_da_afrmm;

    protected $tipos_int = [
        'via_transporte',
        'tipo_intermediacao'
    ];

    protected $tipos_float = [
        'valor_da_afrmm'
    ];

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'numero_declaracao_importacao' => 'ndi',
            'data_registro' => 'ddi',
            'local_desembaraco' => 'xlocdesemb',
            'uf_desembaraco' => 'ufdesemb',
            'codigo_exportador' => 'cexportador',
            'data_desembaraco' => 'dtdesemb',
            'via_transporte' => 'tpviatransp',
            'valor_da_afrmm' => 'vafrmm',
            'tipo_intermediacao' => 'tpintermedio',
            'cnpj_adquirente' => 'cnpj_adq',
            'uf_adquirente' => 'ufterceiro'

        ]);
    }

}
