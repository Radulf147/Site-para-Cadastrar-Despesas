<?php

session_start();

require_once('conexao.php');
 
if(empty($_POST['CPF']) || empty($_POST['Senha'])) 
{
	header('Location: Tela De Login.php');
	exit();
}
 
$usuario = $_POST['CPF'];

$senha = $_POST['Senha'];

$result = $pdo->prepare("SELECT CPF, Administrador FROM usuario WHERE CPF = :cpf AND Senha = :senha");

$result->bindParam(':cpf', $usuario, PDO::PARAM_STR);
$result->bindParam(':senha', $senha, PDO::PARAM_STR);

if($result->execute())
{
	if($result->rowCount()>0)
	{
		while($row = $result->fetch(PDO::FETCH_OBJ))
		{
			if($row->Administrador == 0)
			{
				$_SESSION['CPF'] = $usuario;
							
				echo '2';
				
			}
			else 
			{
				$_SESSION['CPF'] = $usuario;
				
				echo '1';

				
			}
		}	
	}
	else 
	{
		$_SESSION['nao_autenticado'] = true;

		echo '3';
		
	}
} 
?>
