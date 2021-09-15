<?php

class Contato{

    private $nome ;
    private $email ;
    private $telefone ;

    public function __construct($nome,$email,$telefone){
        $this->nome = $nome;
		$this->email = $email;
		$this->telefone = $telefone;
    }

    public function __get($atributo){
		return $this->$atributo;
	}

	public function __set($atributo,$valor){
		$this->$atributo=$valor;
	}
}