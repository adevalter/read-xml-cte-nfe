<?php

namespace Xml\Util\Models\Traits;

trait PIS
{
    public string | null $codigo_situacao_tributaria;

    public float | null $valor_da_base_de_calculo;
    public float | null $percentual_aliquota_do_pis;
    public float | null $valor_do_pis;
    public float | null $quantidade_vendida;
    public float | null $aliquota_do_pis_em_reais;

    public bool | null $valor_soma_pis_compoe_total_nota;

}
