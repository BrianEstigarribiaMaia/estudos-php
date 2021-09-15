<?php

class Email{

    private $para;
    private $assunto;
    private $mensagem;

    public function __construct($mensagem){
        $this->para = "brianestigarribia@gmail.com";
        $this->assunto = "contato via site"
        $this->mensagem = $mensagem;
    }

    public function enviarEmail(){
        mail($this->para, $this->assunto, $this->mensagem);
    }
}