<?php

class Programador extends Pessoa{
    public $linguagem;

    public function __construct($tmpNome, $tmpLinguagem)
    {
        $this->nome = $tmpNome;
        $this->linguagem = $tmpLinguagem;

        echo '<br>Objeto '.__CLASS__.' foi instanciado.<br>'; //Exibe a class numa constante
    }
}

//Outras constantes
/*
__DIR__ -> Retorna o diretório.
__LINE__ -> Retorna o número da linha do script na qual ela foi declarada.
__FILE__ -> Retorna o caminho do arquivo PHP.
__CLASS__ -> Retorna a class a qual foi declarada.
__METHOD__ -> Retorna a classe e o método a qual foi declarada.
__FUNCTION__ -> Retorna a function a qual foi declarada.
__NAMESPACE__ -> Retona o namespace a qual foi declarada.*/


?>