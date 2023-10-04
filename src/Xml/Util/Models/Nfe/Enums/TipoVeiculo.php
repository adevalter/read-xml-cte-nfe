<?php

namespace Xml\Util\Models\Nfe\Enums;

class TipoVeiculo
{
    use Traits\EnumTraits;


    const CICLOMOTOR = '02';
    const MOTONETA = '03';
    const MOTOCICLETA = '04';
    const TRICICLO = '05';
    const AUTOMOVEL = '06';
    const MICRO_ONIBUS = '07';
    const ONIBUS = '08';
    const REBOQUE = '10';
    const SEMIRREBOQUE = '11';
    const CAMIONETA = '13';
    const CAMINHAO = '14';
    const CAMINHAO_TRATOR = '17';
    const TR_RODAS = '18';
    const TR_ESTEIRAS = '19';
    const TR_MISTOS = '20';
    const QUADRICICLO = '21';
    const CHASSI_PLATAFORMA = '22';
    const CAMINHONETE = '23';
    const UTILITARIO = '25';
    const MOTOR_CASA = '26';
    
    const DESCRICOES = [
        self::CICLOMOTOR => 'Ciclomotor',
        self::MOTONETA => 'Motoneta',
        self::MOTOCICLETA => 'Motocicleta',
        self::TRICICLO => 'Triciclo',
        self::AUTOMOVEL => 'Automóvel',
        self::MICRO_ONIBUS => 'Micro-ônibus',
        self::ONIBUS => 'Ônibus',
        self::REBOQUE => 'Reboque',
        self::SEMIRREBOQUE => 'Semi-reboque',
        self::CAMIONETA => 'Camioneta',
        self::CAMINHAO => 'Caminhão',
        self::CAMINHAO_TRATOR => 'Caminhão-trator',
        self::TR_RODAS => 'Trator de rodas',
        self::TR_ESTEIRAS => 'Trator de esteiras',
        self::TR_MISTOS => 'Trator misto',
        self::QUADRICICLO => 'Quadriciclo',
        self::CHASSI_PLATAFORMA => 'Chassi-plataforma',
        self::CAMINHONETE => 'Caminhonete',
        self::UTILITARIO => 'Utilitário',
        self::MOTOR_CASA => 'Motor-casa',
    ];
    
}