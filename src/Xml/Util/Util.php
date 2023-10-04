<?php
declare(strict_types=1);

namespace Xml\Util;


class Util {

    private string $type;
    private string $path_file;


    public function ValidateFile(string $path_file, string $type): bool
    {

        if( !$path_file ){
            throw new \Exception('informe um arquivo!');
        }

        $this->path_file = $path_file; 

        $this->type = $type;

        $this->validateFileExist();

        $this->validateExtension();

        return true;
    }

    public function getContent(): string
    {
        if(!$this->type){
            throw new \Exception($this->type.' não está validado!');
        }

        if(! $content = strtolower(file_get_contents($this->path_file))){
            throw new \Exception('Erro ao capturar dados do !');
        }

        return $content;

    }

    private function validateFileExist(): void
    {
        if(!file_exists($this->path_file)){
            throw new \Exception('O xml não existe no diretorio!');
        }

    }

    private function validateExtension(): void
    {
        if(strtolower(pathinfo($this->path_file, PATHINFO_EXTENSION)) != $this->type){
            throw new \Exception('A extensão '.$this->type.' do arquivo não é valida!');
        }

      
    }

    
    public function validateIsCteOrNfe(object $cte, string $type): void
    {

        if(!isset($cte->$type)) {
            throw new \Exception("O arquivo não é do tipo $type!");
        }
        
    }
  

}
