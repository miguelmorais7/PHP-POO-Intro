<?php

require 'Pessoa.php';
require 'Programador.php';
/*require_once 'Pessoa.php'; //Da fatal error
@include 'Pessoa.php'; //Ignora erros/warnings*/

$nova_pessoa = new Pessoa('Miguel');
$programador = new Programador('Miguel', 'PHP');
//$nova_pessoa = new Pessoa;
//$nova_pessoa->nome = 'Miguel';
//$nova_pessoa->site = 'www.miguel.com';

//$nova_pessoa->setNome('Miguel');
//echo $nova_pessoa->getNome();
echo $programador->getNome();

# constantes
echo $programador::ESPECIE; //Acessar constante


//var_dump($nova_pessoa);
//$nova_pessoa->falarNome();
//$nova_pessoa->falarSite();

?>