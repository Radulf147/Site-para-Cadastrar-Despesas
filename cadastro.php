<?php

session_start();

require_once('conexao.php');

$CPF = $_POST['CPF'];
$Nome = $_POST['Nome'];
$senha = $_POST['Senha'];
$administrador = 0;

$result = $pdo->prepare("SELECT CPF FROM usuario WHERE CPF = :cpf");

$result->bindParam(':cpf', $CPF, PDO::PARAM_STR);

if($result->execute())
{
	if($result->rowCount()==0)
	{
        echo '1';
        
		$sql = "INSERT INTO usuario (CPF, Nome, Senha, Administrador) VALUES (?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);
            
        $stmt->bindParam(1, $CPF, PDO::PARAM_STR);
        $stmt->bindParam(2, $Nome, PDO::PARAM_STR);
        $stmt->bindParam(3, $senha, PDO::PARAM_STR);
        $stmt->bindParam(4, $administrador, PDO::PARAM_INT);
        
        $stmt->execute();

        

		   
        
    }
    else 
    {
        $_SESSION['nao_autenticado'] = true;
        echo '2';
  
    }
} 

?>

