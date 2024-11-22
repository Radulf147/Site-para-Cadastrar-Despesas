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
<body>
    <div class = "flexboxcolumn">
<h3 class = "TextoBase">Cadastar Tipo de Despesas</h3><
<label class = "TextoBase">Tipo de Despesa:</label>
<input id ="Despesa" name="Despesa" type="text" required><br>   
<button class = "Button" id = "cadastro_despesa">Cadastrar</button>

<form action = "Menu Administrador.php" method="POST">
<button class = "Button" type="submit">Voltar para o menu</button>
</form>
</div>
</body>
<script src="http://code.jquery.com/jquery-1.11.3.min.js">
  
</script>
<script src ="jquery.js"type="text/javascript">

</script>
</html>