<?php
declare(strict_types=1);

namespace Xml\Util\Models\Nfe\Servicos\Imposto;

use Xml\Util\Models\Traits\Atributes;
use Xml\Util\Models\Nfe\Servicos\Imposto\ICMS\ICMS;
use Xml\Util\Models\Nfe\Servicos\Imposto\IPI\IPI;
use Xml\Util\Models\Nfe\Servicos\Imposto\PIS\PIS;
use Xml\Util\Models\Nfe\Servicos\Imposto\COFINS\COFINS;
use Xml\Util\Models\Nfe\Servicos\Imposto\ISSQN\ISSQN;
use Xml\Util\Models\Nfe\Servicos\Imposto\COFINSST\COFINSST;
use Xml\Util\Models\Nfe\Servicos\Imposto\Importacao\Importacao;


class Imposto {
    use Atributes;

    private object $xml;
    public string $tipo_icms;

    public float | null $valor_total_tributos;

    public object | null $icms = null;
    public object | null $ipi = null;
    public object | null $pis = null;
    public object | null $cofins = null;
    public object | null $cofinsst = null;
    public object | null $issqn = null;
    public object | null $importacao = null;

    protected $tipos_float = [
        'valor_total_tributos',
    ];

    function __construct( object $xml){

        $this->xml = $xml;

        $this->getAtribute([
            'valor_total_tributos' => 'vtottrib',
        ]);
        
        $this->getICMS();
        $this->getIPI();
        $this->getPIS();
        $this->getCOFINS();
        $this->getCOFINSST();
        $this->getISSQN();
        $this->getImportacao();

    }

    
    public function getICMS()
    {

        foreach($this->xml->icms as $icms){
            if($icms){
                foreach ($icms as $grupo => $icms_xml) {
                    $icms_ob = new ICMS($icms_xml, $grupo);
                    $this->icms = $icms_ob->toObject();
                }

            }
        }
    }

    public function getIPI()
    {
            
        if($this->xml->ipi){

            $ipi_ob = new IPI($this->xml->ipi);
            $this->ipi = $ipi_ob->toObject();

        }
            
    }

    public function getPIS()
    {

        foreach($this->xml->pis as $pis){
            if($pis){
                foreach ($pis as $grupo => $pis_xml) {
                    $pis_ob = new PIS($pis_xml, $grupo);
                    $this->pis = $pis_ob->toObject();
                }

            }
        }
    }

    public function getCOFINS()
    {

        foreach($this->xml->cofins as $cofins){
            if($cofins){
                foreach ($cofins as $grupo => $cofins_xml) {
                    $cofins_ob = new COFINS($cofins_xml, $grupo);
                    $this->cofins = $cofins_ob->toObject();
                }

            }
        }
    }

    public function getCOFINSST()
    {

        foreach($this->xml->cofinsst as $cofinsst){
            if($cofinsst){
                foreach ($cofinsst as $grupo => $cofinsst_xml) {
                    $cofinsst_ob = new cofinsST($cofinsst_xml, $grupo);
                    $this->cofinsst = $cofinsst_ob->toObject();
                }

            }
        }
    }


    public function getISSQN()
    {

        foreach($this->xml->issqn as $issqn){
            if($issqn){
                foreach ($issqn as $grupo => $issqn_xml) {
                    $issqn_ob = new ISSQN($issqn_xml, $grupo);
                    $this->issqn = $issqn_ob->toObject();
                }

            }
        }
    }

    public function getImportacao()
    {
        if($this->xml->ii){
            $importacao_ob = new Importacao($this->xml->ii);
            $this->importacao = $importacao_ob->toObject();
        }
    }


}
