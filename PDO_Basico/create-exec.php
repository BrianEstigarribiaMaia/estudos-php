<?php

include './connection.php';

$conn = getConnection();

$sql = "insert into produto (descricao,qtd,valor) values ('Arroz, 30, '4.50')";

if ($conn->exec($sql)) {
    echo 'Salvo com sucesso!';
} else {
    echo 'Erro ao salvar!';
}
