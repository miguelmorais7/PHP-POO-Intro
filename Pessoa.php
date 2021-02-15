<?php

class Pessoa{
    //public, private, protected

    //public $nome; //Define variável pública
    //public $site;

    //private $nome;
    protected $nome; //Utiliza na herança
    const ESPECIE = 'Humana';

    public function __construct($tmpNome)
    {
        $this->nome = $tmpNome;
    }

    public function setNome($novoNome)
    {
        $this->nome = $novoNome;
    }
    public function getNome()
    {
        return $this->$nome;
    }
    /*public function falarNome(){
        echo $this->nome; 
    }*/ //Método público
    /*public function falarSite(){
        echo $this->site;
    }*/
}

?>