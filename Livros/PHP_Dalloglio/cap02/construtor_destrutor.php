<?php

class Pessoa{
	
	public $Codigo;
	public $Nome;
	
	//método construtor
	function __construct($codigo, $nome){
		$this->Codigo = $codigo;
		$this->Nome   = $nome;
	}
	
	//método destrutor
	function __destruct(){
		echo "deslocando {$this->Nome}\n";
	}
	
}

$maria = new Pessoa(27, 'Maria da Silva');
$joana = new Pessoa(28, 'Joana Maranhão');

var_dump($maria, $joana);

unset($maria);
unset($joana);
?>
