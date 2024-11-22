<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="Style.css" 
    rel="stylesheet" 
    type="text/css" 
    media="all"> 
<title>Cadastrar Despesas</title>
</head>
<
<body>
<h3 class = "TextoBase">Cadastar Despesas</h3>
<?php
if(isset($_SESSION['sucesso']));
?>
<div class="notification is-danger">
<p class = "TextoBase">Cadastro realizado com sucesso.</p>
</div>


<label>Tipo de Despesa:</label><br><br><br><br> 
<select class = "Button" id = "tipo_despesa">
<?php

require_once('conexao.php');

$result = $pdo->prepare("SELECT * FROM tipo_de_despesa");

if($result->execute())
{
  if($result->rowCount()>0)
  {		   
    while($row = $result->fetch(PDO::FETCH_OBJ))

    echo "<option value='$row->codigo'>$row->Nome_Da_Despesa</option>";    
    
  }
}
?>
</select>

<br><br>
<div class = "flexboxcolumn">
<label>Descricao:</label><input class = "TextBase" id="descricao" required><br><br>
<label>Valor:</label><input class = "TextBase" id="Valor" required><br><br>
<label>Data:</label><<input class = "TextBase" id="data" type="date" required><br><br>
<button class = "Button" id="flamengo">Cadastrar</button><br>
<form method="POST" action ="Menu Administrador.php">
<button class = "Button"->Voltar para o menu</button>
</form>
</div>
</body>
<script src="http://code.jquery.com/jquery-1.11.3.min.js">
  
</script>
<script src ="jquery.js"type="text/javascript">

</script>

</html>
