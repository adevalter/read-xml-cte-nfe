<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Totais\ICMS;

use Xml\Util\Models\Traits\Atributes;

/**
 * Dados do COFINS da Substituição Tributaria;
 */
class ICMS {
    use Atributes;

    private object $xml;

    public float | null $base_calculo_icms;
    public float | null $valor_total_icms;
    public float | null $valor_total_icms_desonerado;
    public float | null $valor_total_icms_relativo_fundo_combate_pobreza;
    public float | null $valor_total_icms_partilha_uf_destinatario;
    public float | null $valor_total_icms_partilha_uf_remetente;
    public float | null $valor_total_fcp_fundo_combate_pobreza;
    public float | null $base_calculo_icms_st;
    public float | null $valor_total_icms_st;
    public float | null $valor_total_fcp_fundo_combate_pobreza_retido_substituicao_tributaria;
    public float | null $valor_total_fcp_fundo_combate_pobreza_retido_anteriormente_substituicao_tributaria;
    public float | null $valor_total_quantidade_tributada_icms_monofasico_proprio;
    public float | null $valor_total_icms_monofasico_proprio;
    public float | null $valor_total_quantidade_tributada_icms_monofasico_sujeito_retencao;
    public float | null $valor_total_icms_monofasico_sujeito_retencao;
    public float | null $valor_total_quantidade_tributada_icms_monofasico_retido_anteriormente;
    public float | null $valor_total_icms_monofasico_retido_anteriormente;
    public float | null $valor_total_produtos_servicos;
    public float | null $valor_total_frete;
    public float | null $valor_total_seguro;
    public float | null $valor_total_desconto;
    public float | null $valor_total_ii;
    public float | null $valor_total_ipi;
    public float | null $valor_total_ipi_devolvido;
    public float | null $valor_total_pis;
    public float | null $valor_total_cofins;
    public float | null $outras_despesas_acessorias;
    public float | null $valor_total_nfe;
    public float | null $valor_estimado_total_impostos_federais_estaduais_municipais;
    

    protected $tipos_float = [
        'base_calculo_icms',
        'valor_total_icms',
        'valor_total_icms_desonerado',
        'valor_total_icms_relativo_fundo_combate_pobreza',
        'valor_total_icms_partilha_uf_destinatario',
        'valor_total_icms_partilha_uf_remetente',
        'valor_total_fcp_fundo_combate_pobreza',
        'base_calculo_icms_st',
        'valor_total_icms_st',
        'valor_total_fcp_fundo_combate_pobreza_retido_substituicao_tributaria',
        'valor_total_fcp_fundo_combate_pobreza_retido_anteriormente_substituicao_tributaria',
        'valor_total_quantidade_tributada_icms_monofasico_proprio',
        'valor_total_icms_monofasico_proprio',
        'valor_total_quantidade_tributada_icms_monofasico_sujeito_retencao',
        'valor_total_icms_monofasico_sujeito_retencao',
        'valor_total_quantidade_tributada_icms_monofasico_retido_anteriormente',
        'valor_total_icms_monofasico_retido_anteriormente',
        'valor_total_produtos_servicos',
        'valor_total_frete',
        'valor_total_seguro',
        'valor_total_desconto',
        'valor_total_ii',
        'valor_total_ipi',
        'valor_total_ipi_devolvido',
        'valor_total_pis',
        'valor_total_cofins',
        'outras_despesas_acessorias',
        'valor_total_nfe',
        'valor_estimado_total_impostos_federais_estaduais_municipais',
    ];

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'base_calculo_icms' => 'vbc',
            'valor_total_icms' => 'vicms',
            'valor_total_icms_desonerado' => 'vicmsdeson',
            'valor_total_icms_relativo_fundo_combate_pobreza' => 'vfcpufdest',
            'valor_total_icms_partilha_uf_destinatario' => 'vicmsufdest',
            'valor_total_icms_partilha_uf_remetente' => 'vicmsufremet',
            'valor_total_fcp_fundo_combate_pobreza' => 'vfcp',
            'base_calculo_icms_st' => 'vbcst',
            'valor_total_icms_st' => 'vst',
            'valor_total_fcp_fundo_combate_pobreza_retido_substituicao_tributaria' => 'vfcpst',
            'valor_total_fcp_fundo_combate_pobreza_retido_anteriormente_substituicao_tributaria' => 'vfcpstret',
            'valor_total_quantidade_tributada_icms_monofasico_proprio' => 'qbcmont',
            'valor_total_icms_monofasico_proprio' => 'vicmsmont',
            'valor_total_quantidade_tributada_icms_monofasico_sujeito_retencao' => 'qbcmontreten',
            'valor_total_icms_monofasico_sujeito_retencao' => 'vicmsmontreten',
            'valor_total_quantidade_tributada_icms_monofasico_retido_anteriormente' => 'qbcmontret',
            'valor_total_icms_monofasico_retido_anteriormente' => 'vicmsmontret',
            'valor_total_produtos_servicos' => 'vprod',
            'valor_total_frete' => 'vfrete',
            'valor_total_seguro' => 'vseg',
            'valor_total_desconto' => 'vdesc',
            'valor_total_ii' => 'vii',
            'valor_total_ipi' => 'vipi',
            'valor_total_ipi_devolvido' => 'vipidevol',
            'valor_total_pis' => 'vpis',
            'valor_total_cofins' => 'vcofins',
            'outras_despesas_acessorias' => 'voutro',
            'valor_total_nfe' => 'vnf',
            'valor_estimado_total_impostos_federais_estaduais_municipais' => 'vtottrib',

        ]);
        
    }


}
