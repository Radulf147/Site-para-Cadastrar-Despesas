<?php

$host = 'localhost';
$usuario = 'root';
$senha_banco = '';
$banco = 'banco_site';
$dsn = "mysql:host={$host};port=3306;dbname={$banco}";

try 
{
    $pdo = new PDO($dsn, $usuario, $senha_banco);
}
catch (PDOException $e) 
{
    die($e->getMessage());
}
?>
