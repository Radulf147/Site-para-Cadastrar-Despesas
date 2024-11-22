<?php

session_start();

require_once('conexao.php');

if(empty($_SESSION['CPF']) || empty($_SESSION['senha'])) 
{
	header('Location: Menu Administrador.php');
	exit();
}
 
$descricao = $_POST['descricao'];
$data = $_POST['data'];
$Valor = $_POST['Valor'];
$tipo_despesa = $_POST['tipo_despesa'];
$CPF = $_SESSION['CPF'];


$result = $pdo->prepare("SELECT descricao, DataPagamento FROM despesa WHERE CPF = ? AND codigoTipoDespesa = ? AND dataPagamento = ? AND Valor = ? AND descricao = ?");

$result->bindParam(1, $CPF, PDO::PARAM_STR);
$result->bindParam(2, $tipo_despesa, PDO::PARAM_STR);
$result->bindParam(3, $data, PDO::PARAM_STR);
$result->bindParam(4, $Valor, PDO::PARAM_STR);
$result->bindParam(5, $descricao, PDO::PARAM_STR);

if($result->execute())
{
	if($result->rowCount()==0)
	{
		$sql = "INSERT INTO despesa (valor, CPF, descricao, dataPagamento, codigoTipoDespesa) VALUES (?, ?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);
    
        $stmt->bindParam(1, $Valor, PDO::PARAM_STR);
        $stmt->bindParam(2, $CPF, PDO::PARAM_STR);
        $stmt->bindParam(3, $descricao, PDO::PARAM_STR);
        $stmt->bindParam(4, $data, PDO::PARAM_STR);
        $stmt->bindParam(5, $tipo_despesa, PDO::PARAM_INT);
        
        $stmt->execute();

        
    }
    
} 

?>

