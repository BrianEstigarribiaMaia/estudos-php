<?php

include './connection.php';

$conn = getConnection();

$sql = 'select * from produto where id =: id';

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', 1);
$stmt->execute();

$result = $stmt->fetchAll();

foreach ($result as $value) {
    echo 'Desc: '.$value['descricao']. '<br>';
}