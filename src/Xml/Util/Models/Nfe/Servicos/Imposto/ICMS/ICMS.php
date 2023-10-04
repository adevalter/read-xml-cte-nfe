<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Imposto\ICMS;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Traits\ICMS as ICMSTraits;

class ICMS {
    use Atributes , ICMSTraits;

    private object $xml;
    private string $grupo;


    protected $tipos_int = [
        'origem_mercadoria',
        'modalidade_de_determinacao_da_bc_do_icms',
        'modalidade_de_determinacao_da_bc_do_icms_st',
        'motivo_da_desoneracao_do_icms',
    ];

    protected $tipos_float = [
        'valor_da_bc_do_icms',
        'aliquota_do_icms',
        'valor_do_icms',
        'percentual_de_margem_de_valor_adicionado_icms_st',
        'percentual_da_reducao_de_base_de_calculo_icms_st',
        'valor_da_bc_do_icms_st',
        'aliquota_do_icms_st',
        'valor_do_icms_st',
        'valor_do_icms_st_retido',
        'percentual_da_reducao_de_base_de_calculo',
        'valor_do_icms_desonerado',
        'valor_icms_da_operacao',
        'percentual_do_diferimento',
    ];
    


    function __construct( object $xml, string $grupo){

        $this->xml = $xml;
        $this->grupo = $grupo;

        $this->getAtribute([
            'origem_mercadoria' => 'orig',
            'tributacao_icms' => 'cst',
            'modalidade_de_determinacao_da_bc_do_icms' => 'modbc',
            'valor_da_bc_do_icms' => 'vbc',
            'aliquota_do_icms' => 'picms',
            'valor_do_icms' => 'vicms',
            'modalidade_de_determinacao_da_bc_do_icms_st' => 'modbcst',
            'percentual_de_margem_de_valor_adicionado_icms_st' => 'pmvast',
            'percentual_da_reducao_de_base_de_calculo_icms_st' => 'predbcst',
            'valor_da_bc_do_icms_st' => 'vbcst',
            'aliquota_do_icms_st' => 'picmsst',
            'valor_do_icms_st' => 'vicmsst',
            'valor_do_icms_st_retido' => 'vicmsstret',
            'percentual_da_reducao_de_base_de_calculo' => 'predbc',
            'motivo_da_desoneracao_do_icms' => 'motdesicms',
            'valor_do_icms_desonerado' => 'vicmsdeson',
            'valor_icms_da_operacao' => 'vicmsop',
            'percentual_do_diferimento' => 'pdif',
            'valor_do_icms_diferido' => 'vicmsdif',
            'percentual_da_bc_operacao_propria' => 'pbcop',
            'uf_para_quem_e_devido_o_icms_st' => 'ufst',
            'valor_da_bc_do_icms_st_da_uf_de_destino' => 'vbcstdest',
            'aliquota_aplicavel_de_calculo_do_credito' => 'pcredsn',
            'valor_credito_icms_que_pode_ser_aproveitado' => 'vcredicmssn',
            'percentual_do_fundo_de_combate_a_pobreza' => 'pfcp',
            'valor_bc_do_fcp' => 'vfcp',
            'valor_bc_do_fcp_st' => 'vbcfcpst',
            'percentual_fcp_retido_por_st' => 'pfcpst',
            'valor_do_fcp_retido_por_st' => 'vfcpst',
            'aliquota_suportada_pelo_consumidor_final' => 'psts',
            'valor_icms_proprio_do_substituto' => 'vicmssubstituto',
            'valor_bc_do_fco_retido_anteriormente_por_st' => 'vbcfcpstret',
            'percentual_fcp_retido_anteriormente_por_st' => 'pfcpstret',
            'valor_fcb_retido_por_st' => 'vfcpstret',
            'gerar_icms_st' => 'geraricmsst',
            'percentual_da_reducao_da_bc_efetiva' => 'predbcefet',
            'valor_bc_efetiva' => 'vbcefet',
            'aliquota_icms_efetiva' => 'picmsefet',
            'valor_icms_efetivo' => 'vicmsefet',
            'desconto_icms_desonerado_total_nota' => 'digitacaodescicmsdeson',
            'valor_icms_st_desonerado' => 'vicmsstdeson',
            'motivo_desoneracao_icms_st' => 'motdesicmsst',
            'percentual_difereminto_icms_relatiovo_ao_fcb' => 'pfcpdif',
            'valor_icms_relativo_ao_fcb_diferido' => 'vfcpdif',
            'valor_icms_relativo_ao_fcb_realmente_devido' => 'vfcpefet',
            'quantidade_tributada' => 'qbcmono',
            'aliquota_ad_rem_do_imposto' => 'adremicms',
            'valor_do_icms_proprio' => 'vicmsmono',
            'quantidade_tributada_sugeita_a_retencao' => 'qbcmonoreten',
            'aliquota_ad_rem_do_imposto_com_retencao' => 'adremicmsreten',
            'valor_do_icms_com_retencao' => 'vicmsmonoreten',
            'percentual_de_reducao_valor_aliquota_adren_do_icms' => 'predadrem',
            'motivo_reducao_adrem' => 'motredadrem',
            'quantidade_tributada_diferida' => 'qbmonodif',
            'aliquota_ad_rem_do_imposto_diferida' => 'adremicmsdif',
            'valor_do_icms_diferido_multiplicacao' => 'vicmsmonodif',
            'quantidade_tributada_retida_anteriormente' => 'qbcmonoret',
            'aliquota_ad_rem_do_imposto_retida_anteriormente' => 'adremicmsret',
            'valor_do_icms_retido_anteriormente' => 'vicmsmonoret',

        ]);
        
    }

}
