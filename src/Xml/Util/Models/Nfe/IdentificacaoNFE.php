<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe;

use Xml\Util\Models\Nfe\Enums\TipoOperacao;
use Xml\Util\Models\Traits\Atributes;


class IdentificacaoNFE {

    use Atributes;

    private object $xml;

    public string | null $codigo_numerico;
    public string | null $cfop;
    public string | null $natureza_operacao;
    public string | null $serie;
    public string | null $numero_nfe;
    public string | null $data_emissao;
    public string | null $data_saida_entrada;
    public string | null $versao_processo_emissao;
    public string | null $codigo_municipio_icms;
    public string | null $codigo_compoe_chave;
    public string | null $Justificativa_entrada_contingencia;
    public string | null $data_entrada_contingencia;
    public string | null $email_para_recebimento_arquivos;
    public string | null $numero_pedido;
    public int | null $uf;
    public int | null $modelo_nfe;
    public int | null $tipo_operacao;
    public int | null $tipo_ambiente;
    public int | null $local_destino_operacao;
    public int | null $operacao_consumidor_final;
    public int | null $operacao_presenca_comprador;
    public int | null $indentificador_de_intermediador;
    public int | null $tipo_impressao;
    public int | null $tipo_emissao;
    public int | null $finalidade_emissao;
    public int | null $processo_emissao;
    public int | null $digito_verificador;


    protected $tipos_int = [
        'uf',
        'modelo_nfe',
        'tipo_operacao',
        'local_destino_operacao',
        'operacao_consumidor_final',
        'operacao_presenca_comprador',
        'indentificador_de_intermediador',
        'tipo_impressao',
        'tipo_emissao',
        'tipo_ambiente',
        'finalidade_emissao',
        'processo_emissao',
        'digito_verificador',

    ];

    protected $tipos_data = [
        'data_emissao',
        'data_saida_entrada',
        'data_entrada_contingencia',
    ];


    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'codigo_numerico' => 'cNF',
            'uf' => 'cuf',
            'cfop' => 'cfop',
            'natureza_operacao' => 'natop',
            'modelo_nfe' => 'mod',
            'serie' => 'serie',
            'numero_nfe' => 'nnf', 
            'data_emissao' => 'dhemi', 
            'fuso_horario' => 'fusohorario',
            'data_saida_entrada' => 'dhsaient',
            'tipo_operacao' => 'tpnf',
            'local_destino_operacao' => 'iddest',
            'operacao_consumidor_final' => 'indfinal',
            'operacao_presenca_comprador' => 'indpres',
            'indentificador_de_intermediador' => 'indintermed',
            'codigo_municipio_icms' => 'cmunfg',
            'tipo_impressao' => 'tpimp',
            'tipo_emissao' => 'tpemis', 
            'tipo_ambiente' => 'tpamb',
            'Justificativa_entrada_contingencia' => 'xjust',
            'data_entrada_contingencia' => 'dhcont',
            'finalidade_emissao' => 'finnfe',
            'email_para_recebimento_arquivos' => 'Emailarquivos',
            'numero_pedido' => 'numeropedido',
            'processo_emissao' => 'procemi',
            'versao_processo_emissao' => 'verproc',
            'digito_verificador' => 'cdv',

        ]);

    }


}
