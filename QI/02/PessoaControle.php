<?php
include 'Pessoa.class.php';

$pessoa = new Pessoa();

$pessoa->setNome($_POST['txtnome']);
$pessoa->setIdade($_POST['txtidade']);

echo '<br> Nome: '.$pessoa->getNome().
	 '<br> Idade: '.$pessoa->getIdade().
	 '<br> Idade em meses: '.$pessoa->calcularMeses();


