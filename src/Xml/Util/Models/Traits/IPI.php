<?php

namespace Xml\Util\Models\Traits;

trait IPI
{

    public string | null $codigo_de_enquadramento_legal;
    public string | null $cnpj_produtor;
    public string | null $codigo_selo;
    public string | null $quantidade_selo;
    public string | null $codigo_enquadramento_para_cigarros_bebidas;
    public object | null $ipi_tributado = null;
    public object | null $ipi_nao_tributado = null;
    
}
