<?php

namespace Xml\Util\Models\Traits;

trait COFINSST
{
    public float | null $valor_da_base_de_calculo;
    public float | null $percentual_aliquota_do_cofins;
    public float | null $valor_do_cofins;
    public float | null $quantidade_vendida;
    public float | null $aliquota_do_cofins_em_reais;

    public bool | null $valor_soma_cofins_compoe_total_nota;

}
