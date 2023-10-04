<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Nfe\Servicos\Produtos\DetalhamentoEspecificoArmamento;
use Xml\Util\Models\Nfe\Servicos\Produto\DetalhamentoEspecificoDeVeiculosNovos;
use Xml\Util\Models\Nfe\Servicos\Produtos\Combustivel\DetalhamentoEspecificoCombustiveis;
use Xml\Util\Models\Nfe\Servicos\Produtos\Exportacao\ExportacaoIndireta;
use Xml\Util\Models\Nfe\Servicos\Produtos\GrupoDeclaracaoImportacao;
use Xml\Util\Models\Nfe\Servicos\Produtos\DetalhamentoProdutoSujeitoARastreabilidade;
use Xml\Util\Models\Nfe\Servicos\Produtos\GrupoNVE;
use Xml\Util\Models\Nfe\Servicos\Produtos\GrupoAdicoesNFE;



class Produto {
    use Atributes;

    private object $xml;
    public string | null $codigo_produto;
    public string | null $codigo_barras_gtin;
    public string | null $codigo_barras;
    public string | null $descricao_produto;
    public string | null $ncm;
    public string | null $ex_tipi;
    public string | null $unidade_comercial;
    public string | null $gtin_unidade;
    public string | null $codigo_barras_unidade_tributavel;
    public string | null $unidade_tributavel;
    public string | null $pedido_compra;
    public string | null $numero_item_pedido_compra;
    public string | null $ficha_conteudo_importacao;
    public string | null $numero_do_recopi;
    public string | null $codigo_cest;
    public string | null $indicador_escala_relevante;
    public string | null $cnpj_fabricante;
    public string | null $codigo_beneficio_fiscal_uf;

    public float | null $quantidade_comercial;
    public float | null $valor_unitario_comercial;
    public float | null $valor_total_bruto;
    public float | null $quantidade_tributavel;
    public float | null $valor_unitario_tributavel;
    public float | null $valor_total_frete;
    public float | null $valor_total_seguro;
    public float | null $valor_total_desconto;
    public float | null $outras_despesas_acessorias;

    public bool | null $valor_compoe_total_nf;
    public bool | null $destaca_produto_perigoso;

    public int | null $cfop;
    public int | null $tipo_item;

    public object | null $nve = null; 
    public object | null $grupo_declaracao_importacao = null;
    public object | null $grupo_adicoes_nfe = null;
    public object | null $informacoes_exportacao = null;
    public object | null $detalhamento_especifico_de_veiculos_novos = null;
    public object | null $detalhamento_especifico_armamento = null;
    public object | null $detalhamento_especifico_combustiveis = null;
    public object | null $detalhamento_produto_sujeito_a_rastreabilidade = null;

    protected $tipos_int = [
        'cfop',
        'tipo_item'
    ];

    protected $tipos_float = [
        'quantidade_comercial',
        'valor_unitario_comercial',
        'valor_total_bruto',
        'quantidade_tributavel',
        'valor_unitario_tributavel',
        'valor_total_frete',
        'valor_total_seguro',
        'valor_total_desconto',
        'outras_despesas_acessorias',
    ];

    protected $tipos_bool = [
        'valor_compoe_total_nf',
        'destaca_produto_perigoso',
    ];

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'codigo_produto' => 'cprod',
            'codigo_barras_gtin' => 'cean',
            'codigo_barras' => 'cbarra',
            'descricao_produto' => 'xprod',
            'ncm' => 'ncm',
            'ex_tipi' => 'extipi',
            'cfop' => 'cfop',
            'unidade_comercial' => 'ucom',
            'quantidade_comercial' => 'qcom',
            'valor_unitario_comercial' => 'vuncom',
            'valor_total_bruto' => 'vprod',
            'gtin_unidade' => 'ceantrib',
            'codigo_barras_unidade_tributavel' => 'cbarratrib',
            'unidade_tributavel' => 'utrib',
            'quantidade_tributavel' => 'qtrib',
            'valor_unitario_tributavel' => 'vuntrib',
            'valor_total_frete' => 'vfrete',
            'valor_total_seguro' => 'vseg',
            'valor_total_desconto' => 'vdesc',
            'outras_despesas_acessorias' => 'voutro_item',
            'valor_compoe_total_nf' => 'indtot',
            'tipo_item' => 'ntipoitem',
            'destaca_produto_perigoso' => 'dprod',
            'pedido_compra' => 'xped',
            'numero_item_pedido_compra' => 'nitemped',
            'ficha_conteudo_importacao' => 'nfci',
            'numero_do_recopi' => 'nrecopi',
            'codigo_cest' => 'cest',
            'indicador_escala_relevante' => 'indescala',
            'cnpj_fabricante' => 'cnpjfab',
            'codigo_beneficio_fiscal_uf' => 'cbenef',

        ]);
        
        $this->getNVE();
        $this->getGrupoDeclaracaoImportacao();
        $this->getGrupoAdicoesNFE();
        $this->getInformacoesExportacao();
        $this->getDetalhamentoEspecificoDeVeiculosNovos();
        $this->getDetalhamentoEspecificoArmamento();
        $this->getDetalhamentoEspecificoCombustiveis();
        $this->getDetalhamentoProdutoSujeitoARastreabilidade();

    }

    public function getNVE(): void
    {   
        if($this->xml->nves && $this->xml->nves->nvesitem){
            $grupo_nve = new GrupoNVE($this->xml->nves->nvesitem);
            $this->nve = $grupo_nve->toObject();
        }

    }

    public function getGrupoDeclaracaoImportacao()
    {
        if($this->xml->detdi && $this->xml->detdi->detdiitem){
            $grupo_declaracao_importacao = new GrupoDeclaracaoImportacao($this->xml->detdi->detdiitem);
            $this->grupo_declaracao_importacao = $grupo_declaracao_importacao->toObject();
        }
    }

    public function getGrupoAdicoesNFE()
    {
        if($this->xml->detadicoes && $this->xml->detadicoes->detadicoesitem){
            $grupo_adicoes_nfe = new GrupoAdicoesNFE($this->xml->adi->adiitem);
            $this->grupo_adicoes_nfe = $grupo_adicoes_nfe->toObject();
        }
    }

    public function getInformacoesExportacao()
    {
        if($this->xml->detexport && $this->xml->detexport->detexportitem){
            $informacoes_exportacao = new ExportacaoIndireta($this->xml->detexport->detexportitem);
            $this->informacoes_exportacao = $informacoes_exportacao->toObject();
        }
    }

    public function getDetalhamentoEspecificoDeVeiculosNovos()
    {
        if($this->xml->veicprod){
            $detalhamento_especifico_de_veiculos_novos = new DetalhamentoEspecificoDeVeiculosNovos($this->xml->veicprod);
            $this->detalhamento_especifico_de_veiculos_novos = $detalhamento_especifico_de_veiculos_novos->toObject();
        }
    }

    public function getDetalhamentoEspecificoArmamento()
    {
        if($this->xml->arma && $this->xml->arma->armaitem){
            $detalhamento_especifico_armamento = new DetalhamentoEspecificoArmamento($this->xml->arma->armaitem);
            $this->detalhamento_especifico_armamento = $detalhamento_especifico_armamento->toObject();
        }
    }

    public function getDetalhamentoEspecificoCombustiveis()
    {
        if($this->xml->arma && $this->xml->arma->armaitem){
            $detalhamento_especifico_combustiveis = new DetalhamentoEspecificoCombustiveis($this->xml->comb);
            $this->detalhamento_especifico_combustiveis = $detalhamento_especifico_combustiveis->toObject();
        }
        
    }

    public function getDetalhamentoProdutoSujeitoARastreabilidade()
    {
        if($this->xml->rastro && $this->xml->rastro->rastroitem){
            $detalhamento_produto_sujeito_a_rastreabilidade = new DetalhamentoProdutoSujeitoARastreabilidade($this->xml->rastro->rastroitem);
            $this->detalhamento_produto_sujeito_a_rastreabilidade = $detalhamento_produto_sujeito_a_rastreabilidade->toObject();
        }

    }

}
