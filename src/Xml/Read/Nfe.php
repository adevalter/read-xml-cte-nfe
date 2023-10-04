<?php

namespace Xml\Read;

use Xml\Util\Models\Nfe\Cobranca\Cobranca;
use Xml\Util\Models\Nfe\Totais\Totais;
use Xml\Util\Util;
use Xml\Util\Models\Nfe\Entidade;
use Xml\Util\Models\Nfe\IdentificacaoNFE;
use Xml\Util\Models\Nfe\Servicos\Servicos;
use Xml\Util\Models\Nfe\Transporte\Transporte;
use Xml\Util\Models\Nfe\InformacoesAdicionais\InformacoesAdicionais;
use Xml\Util\Models\Nfe\InformacoesResponsavelTecnico\InformacoesResponsavelTecnico;


class Nfe {


    private object $xml_objct;
    private object $xml_objct_raiz;

    public string | null $chave;
    public object | null $identificacao_nfe;
    public object | null $emitente;
    public object | null $destinatario;
    public object | null $expedidor;
    public object | null $servicos;
    public object | null $totais;
    public object | null $cobranca;
    public object | null $transporte;
    public object | null $informacoes_adicionais;
    public object | null $informacoes_responsavel_tecnico;

    function __construct( string $xml_file){

        if( !$xml_file ){
            throw new \Exception('File Path Required!');
        }
     
        $util = new Util();

        $util->ValidateFile($xml_file, 'xml');

        $this->xml_objct = simplexml_load_string($util->getContent());
        
        $util->validateIsCteOrNfe($this->xml_objct, 'nfe');

        $this->xml_objct_raiz = $this->xml_objct;

        $this->xml_objct = $this->xml_objct->nfe;

    }

    public function all(): object
    {   
        $resultado = new \stdClass();

        $this->chave = $this->getChave();
        $this->identificacao_nfe = $this->getIdentificacaoNFE();
        $this->informacoes_adicionais = $this->getInformacoesAdicionais();
        $this->emitente = $this->getEmitente();
        $this->destinatario = $this->getDestinatario();
        $this->expedidor = $this->getExpedidor();
        $this->servicos = $this->getServicos();
        $this->totais = $this->getTotal();
        $this->cobranca = $this->getCobranca();
        $this->transporte = $this->getTransporte();
        $this->informacoes_responsavel_tecnico = $this->getInformacoesResponsavelTecnico();

        $resultado->chave = $this->chave;
        $resultado->identificacao_nfe = $this->identificacao_nfe;
        $resultado->informacoes_adicionais = $this->informacoes_adicionais;
        $resultado->emitente = $this->emitente;
        $resultado->destinatario = $this->destinatario;
        $resultado->servicos = $this->servicos;
        $resultado->expedidor = $this->expedidor;
        $resultado->totais = $this->totais;
        $resultado->cobranca = $this->cobranca;
        $resultado->transporte = $this->transporte;
        $resultado->informacoes_responsavel_tecnico = $this->informacoes_responsavel_tecnico;

        return $resultado;
    }

    public function getIdentificacaoNFE(): object|null
    {   
        if(isset($this->xml_objct->infnfe->ide)){
            $dados = new IdentificacaoNFE($this->xml_objct->infnfe->ide);
            return $dados->toObject();
        }

        return null;

    }

    public function getInformacoesAdicionais(): object|null
    {   
        if(isset($this->xml_objct->infnfe->infadic)){
            $dados = new InformacoesAdicionais($this->xml_objct->infnfe->infadic);
            return $dados->toObject();
        }

        return null;

    }

    public function getEmitente(): object|null
    {
      
        if(isset($this->xml_objct->infnfe->emit)){
            $entidade = new Entidade($this->xml_objct->infnfe->emit, 'emit');
            return $entidade->toObject();
        }

        return null;
    }

    public function getRemetente(): object|null
    {

        if(isset($this->xml_objct->infnfe->rem)){
            $entidade = new Entidade($this->xml_objct->infnfe->rem, 'rem');
            return $entidade->toObject();
        }

        return null;
    }

    public function getDestinatario(): object|null
    {

        if(isset($this->xml_objct->infnfe->dest)){
            $entidade = new Entidade($this->xml_objct->infnfe->dest, 'dest');
            return $entidade->toObject();
        }

        return null;
 
    }

    public function getExpedidor(): object|null
    {
      
        if(isset($this->xml_objct->infnfe->exped)){
            $entidade = new Entidade($this->xml_objct->infnfe->exped, 'exped');
            return $entidade->toObject();
        }

        return null;
 
    }

    public function getRecebedor(): object|null
    {
      
        if(isset($this->xml_objct->infnfe->receb)){
            $entidade = new Entidade($this->xml_objct->infnfe->receb, 'receb');
            return $entidade->toObject();
        }

        return null;
 
    }

    public function getServicos(): object|null
    {
      
        if(isset($this->xml_objct->infnfe->det)){
            $entidade = new Servicos($this->xml_objct->infnfe->det);
            return $entidade->toObject();
        }

        return null;
 
    }

    public function getTransporte(): object|null
    {
      
        if(isset($this->xml_objct->infnfe->transp)){
            $transporte = new Transporte($this->xml_objct->infnfe->transp);
            return $transporte->toObject();
        }

        return null;
 
    }

    public function getTotal(): object|null
    {
      
        if(isset($this->xml_objct->infnfe->total)){
            $total = new Totais($this->xml_objct->infnfe->total);
            return $total->toObject();
        }

        return null;
 
    }

    public function getCobranca(): object|null
    {
      
        if(isset($this->xml_objct->infnfe->cobr)){
            $entidade = new Cobranca($this->xml_objct->infnfe->cobr);
            return $entidade->toObject();
        }

        return null;

    }

    public function getInformacoesResponsavelTecnico(): object|null
    {
      
        if(isset($this->xml_objct->infnfe->infresptec)){
            $info = new InformacoesResponsavelTecnico($this->xml_objct->infnfe->infresptec);
            return $info->toObject();
        }

        return null;

    }
    public function getChave(): string
    {   

        if(isset($this->xml_objct_raiz->protnfe->infprot->chnfe)){
            return trim( ( string ) $this->xml_objct_raiz->protnfe->infprot->chnfe );
        }

        return null;
      
    }
}
