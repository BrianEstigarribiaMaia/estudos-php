<?php

class Calculadora{
	
	private $num1;
	private $num2;
	
	public function Calculadora($num1, $num2) {
		$this->num1 = $num1;
		$this->num2 = $num2;
	}
	
	public function getNum1(){
		return $this->num1;
	}
	
	public function setNum1($num1){
		$this->num1 = $num1;
	}
	
	public function getNum2(){
		return $this->num2;
	}
	
	public function setNum2($num2){
		$this->num2 = $num2;
	}	
	
	public function somar(){
		return $this->num1 + $this->num2;
	}
	
	public function subtrair(){
		return $this->num1 - $this->num2;
	}
	
	public function multiplicar(){
		return $this->num1 * $this->num2;
	}
	
	public function dividir(){
		return $this->num1 / $this->num2;
	}

}