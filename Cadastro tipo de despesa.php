<?php

session_start();

require_once('conexao.php');

$descricao = $_POST['Despesa'];

$sql = "INSERT INTO tipo_de_despesa (Nome_Da_Despesa) VALUES (?)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(1, $descricao, PDO::PARAM_STR);
$stmt->execute();


exit();
?>

