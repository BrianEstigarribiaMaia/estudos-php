<?php

include_once 'produto.class.php';
include_once 'fornecedor.class.php';

$macarrao = new Produto;
$macarrao->Codigo     = 7;
$macarrao->Descricao  = 'Macarrão Instantâneo';
$macarrao->Preco      =  1.29;
$macarrao->Quantidade =  10;

$isabela = new Fornecedor;
$isabela->Nome     = 'Massas Isabela';
$isabela->Telefone = '(51) 1234-5678';
$isabela->Endereco = 'Rua das Massas';

//associação 
$macarrao->setFornecedor($isabela);

//exibe as informações
$macarrao->ExibeDados();

?>