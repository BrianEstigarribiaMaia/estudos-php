<?php
include 'Calculadora.class.php';

$calc = new Calculadora(5, 4);

echo 
	 'Dado os numeros 5 e 4 temos : <br>'.
	 '<br> Soma: '.$calc->somar().
     '<br> Subtrair: '.$calc->subtrair().
     '<br> Multiplicar: '.$calc->multiplicar().
     '<br> Dividir: '.$calc->dividir();
