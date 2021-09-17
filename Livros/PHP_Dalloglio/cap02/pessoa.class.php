<?php
class Pessoa{
	
	//define atributos 
	public $Codigo;
	public $Nome;
	public $Altura;
	public $Idade;
	
	//defina os métodos 
	function setNome($nome){
		$this->Nome = $nome;
	}
	
	function Crescer($centimetros){
		
		$this->Altura += $centimetros;
	}
	
	function Envelhecer($anos){
		
		$this->Idade += $anos;
	}
	
}

?>