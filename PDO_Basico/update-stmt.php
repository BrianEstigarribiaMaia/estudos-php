<?php

include './connection.php';

$conn = getConnection();

$sql = 'update produto set descricao = :desc, qtd = :qtd, valor = :valor where id =: id';

$descricao = 'Feijão 1';
$qtd = 11;
$valor = 11.80;
$id = 2;

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':desc', $descricao);
$stmt->bindParam(':valor', $valor);
$stmt->bindParam(':qtd', $qtd);

if($stmt->execute()){
    echo 'Atualizado com sucesso!';
}else{
    echo 'Erro ao atualizar!';
}