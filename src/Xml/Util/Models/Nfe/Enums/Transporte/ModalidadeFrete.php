<?php

namespace Xml\Util\Models\Nfe\Enums\Transporte;
use Xml\Util\Models\Nfe\Enums\Traits\EnumTraits;

class ModalidadeFrete
{
    use EnumTraits;
    const CONTRATACAO_FRETE_POR_CONTA_REMETENTE = 0;
    const CONTRATACAO_FRETE_POR_CONTA_DESTINATARIO = 1;
    const CONTRATACAO_FRETE_POR_CONTA_TERCEIROS = 2;
    const TRANSPORTE_PROPRIO_POR_CONTA_REMETENTE = 3;
    const TRANSPORTE_PROPRIO_POR_CONTA_DESTINATARIO = 4;
    const SEM_OCORRENCIA_DE_TRANSPORTE = 9;


    const DESCRICOES = [
        self::CONTRATACAO_FRETE_POR_CONTA_REMETENTE => 'Contratação do Frete por conta do Remetente (CIF)',
        self::CONTRATACAO_FRETE_POR_CONTA_DESTINATARIO => 'Contratação do Frete por conta do Destinatário (FOB)',
        self::CONTRATACAO_FRETE_POR_CONTA_TERCEIROS => 'Contratação do Frete por conta de Terceiros',
        self::TRANSPORTE_PROPRIO_POR_CONTA_REMETENTE => 'Transporte Próprio por conta do Remetente',
        self::TRANSPORTE_PROPRIO_POR_CONTA_DESTINATARIO => 'Transporte Próprio por conta do Destinatário',
        self::SEM_OCORRENCIA_DE_TRANSPORTE => 'Sem Ocorrência de Transporte',
    ];


}
