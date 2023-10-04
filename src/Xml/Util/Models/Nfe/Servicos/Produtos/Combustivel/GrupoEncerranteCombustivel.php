<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Produtos\Combustivel;

use Xml\Util\Models\Traits\Atributes;


class GrupoEncerranteCombustivel {
    use Atributes;

    private object $xml;
    public string | null $numero_identidicacao_bico;
    public string | null $numero_identidicacao_bomba;
    public string | null $numero_identidicacao_tanque;
    public float | null $valor_encerrante_no_inicio_do_abastecimento;
    public float | null $valor_encerrante_no_fim_do_abastecimento;

    public object | null $grupo_indicador_origem_combustivel;


    protected   $tipos_float = [
        'valor_encerrante_no_inicio_do_abastecimento',
        'valor_encerrante_no_fim_do_abastecimento',
    ];

    function __construct( object $xml){

        $this->xml = $xml;
        $this->getAtribute([
            'numero_identidicacao_bico' => 'nbico',
            'numero_identidicacao_bomba' => 'ncbomb',
            'numero_identidicacao_tanque' => 'ntanque',
            'valor_encerrante_no_inicio_do_abastecimento' => 'vencerranteini',
            'valor_encerrante_no_fim_do_abastecimento' => 'vencerrantefim',
        ]);

        $this->getGrupoIndicadorOrigemCombustivel();
    }

    public function getGrupoIndicadorOrigemCombustivel()
    {
        $grupoIndicadorOrigemCombustivel = new GrupoIndicadorOrigemCombustivel($this->xml->origcomb);
        return $grupoIndicadorOrigemCombustivel->toObject();
    }


}
