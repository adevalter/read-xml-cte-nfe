<?php

namespace Xml\Util\Models\Traits;

trait ICMS
{
    public int | null $origem_mercadoria;
    public string | null $tributacao_icms;
    public int | null $modalidade_de_determinacao_da_bc_do_icms;
    public float | null $valor_da_bc_do_icms;
    public float | null $aliquota_do_icms;
    public float | null $valor_do_icms;
    public int | null $modalidade_de_determinacao_da_bc_do_icms_st;
    public float | null $percentual_de_margem_de_valor_adicionado_icms_st;
    public float | null $percentual_da_reducao_de_base_de_calculo_icms_st;
    public float | null $valor_da_bc_do_icms_st;
    public float | null $aliquota_do_icms_st;
    public float | null $valor_do_icms_st;
    public float | null $valor_do_icms_st_retido;
    public float | null $percentual_da_reducao_de_base_de_calculo;
    public int | null $motivo_da_desoneracao_do_icms;
    public float | null $valor_do_icms_desonerado;
    public float | null $valor_icms_da_operacao;
    public float | null $percentual_do_diferimento;
    public float | null $valor_do_icms_diferido;
    public float | null $percentual_da_bc_operacao_propria;
    public string | null $uf_para_quem_e_devido_o_icms_st;
    public float | null $valor_da_bc_do_icms_st_da_uf_de_destino;

    public float | null $aliquota_aplicavel_de_calculo_do_credito;
    public float | null $valor_credito_icms_que_pode_ser_aproveitado;
    public float | null $percentual_do_fundo_de_combate_a_pobreza;
    public float | null $valor_bc_do_fcp;
    public float | null $valor_bc_do_fcp_st;
    public float | null $percentual_fcp_retido_por_st;
    public float | null $valor_do_fcp_retido_por_st;
    public float | null $aliquota_suportada_pelo_consumidor_final;
    public float | null $valor_icms_proprio_do_substituto;
    public float | null $valor_bc_do_fco_retido_anteriormente_por_st;
    public float | null $percentual_fcp_retido_anteriormente_por_st;
    public float | null $valor_fcb_retido_por_st;
    public int | null $gerar_icms_st;
    public float | null $percentual_da_reducao_da_bc_efetiva;

    public float | null $valor_bc_efetiva;
    public float | null $aliquota_icms_efetiva;
    public float | null $valor_icms_efetivo;
    public float | null $desconto_icms_desonerado_total_nota;
    
    public float | null $valor_icms_st_desonerado;

    public int | null $motivo_desoneracao_icms_st;
    public float | null $percentual_difereminto_icms_relatiovo_ao_fcb;
    public float | null $valor_icms_relativo_ao_fcb_diferido;
    public float | null $valor_icms_relativo_ao_fcb_realmente_devido;

    public float | null $quantidade_tributada;
    public float | null $aliquota_ad_rem_do_imposto;
    public float | null $valor_do_icms_proprio;
    public float | null $quantidade_tributada_sugeita_a_retencao;
    public float | null $aliquota_ad_rem_do_imposto_com_retencao;
    public float | null $valor_do_icms_com_retencao;
    public float | null $percentual_de_reducao_valor_aliquota_adren_do_icms;
    public int | null $motivo_reducao_adrem;
    public float | null $quantidade_tributada_diferida;
    public float | null $aliquota_ad_rem_do_imposto_diferida;
    public float | null $valor_do_icms_diferido_multiplicacao;
    public float | null $quantidade_tributada_retida_anteriormente;
    public float | null $aliquota_ad_rem_do_imposto_retida_anteriormente;

    public float | null $valor_do_icms_retido_anteriormente;


}
