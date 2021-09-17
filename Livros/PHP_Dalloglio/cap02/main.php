<?php
//incluir classe
include 'pessoa.class.php';

//instanciar objeto 
$maria = new Pessoa;

//define atributos 
$maria->Idade = 28;
$maria->Altura = 1.7;

//executar métodos 
$maria->setNome('Maria da Silva');
$maria->Crescer(0.1);
$maria->Envelhecer(1);

//imprimir objeto 
var_dump($maria);

?>