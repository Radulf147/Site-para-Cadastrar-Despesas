<?php
require_once('conexao.php');

$date=date_create($_POST['dia']);
$dia=date_format($date,"Y/m/d");

//$date=explode('-',$_GET['dia']);
//$dia=$date[2].'-'.$date[1].'-'.$date[0];


//Faz o SELECT da tabela, usando Prepared Statements.
$sql = "SELECT data, hora, temperatura FROM temp where data='".$dia."'";
$stmt = $pdo->prepare($sql);
$stmt->execute();
//$stmt->bind_result($data, $hora, $temp);
//$stmt->store_result();


//Cria o array primário
$dados = array();

foreach ($stmt as $row)
{
    //Cria o array secundário, onde estarão os dados.
    $temp_hora = array();

    $temp_hora[] = ((string) $row['hora']);
    $temp_hora[] = ((float) $row['temperatura']);

    //Recebe no array principal, os dados.
    $dados[] = ($temp_hora);

}
  //echo '<pre>'; print_r($dados); echo '</pre>';
  //Trasforma os dados em JSON
  $jsonTable = json_encode($dados);

  echo $jsonTable;
  $pdo = null;

?>