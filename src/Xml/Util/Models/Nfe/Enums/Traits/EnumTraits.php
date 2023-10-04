<?php

namespace Xml\Util\Models\Nfe\Enums\Traits;

trait EnumTraits
{
    public static function getDescricao($codigo): string
    {
        if(!self::DESCRICOES){
            return '';
        }
        
        return self::DESCRICOES[$codigo] ?? '';
    }
}
