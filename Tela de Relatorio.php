<!DOCTYPE html>
<html>
<head>
<link 
href="Style.css" 
rel="stylesheet" 
type="text/css" 
media="all">
<title>Usuários</title>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
 <script type="text/javascript" src="ajax.js"></script>
 <link rel="stylesheet" type="text/css" href="css/estilo.css">
 <link rel="stylesheet" type="text/css" href="jquery-confirm-v3.3.4/jquery-confirm.css">
<script type="text/javascript">
function drawBackgroundColor(dados)
{
var data = new google.visualization.DataTable();
data.addColumn('string', 'Horario');
data.addColumn('number', 'Temperatura (ºC)');
//Captura os dados em JSON e monta o gráfico, de acordo com os dados.
data.addRows( dados);
COLÉGIO PEDRO II – U. E. SÃO CRISTÓVÃO III
Professor: Claudio Azevedo Passos
Coordenação: Flávio Costa
//Opções do gráfico:
var options = {
hAxis: {
title: 'Hora'
},
vAxis: {
title: 'Temperatura'
},
backgroundColor: '#f1f8e9'
};
//Criação do Gráfico
var chart = new google.visualization.LineChart(document.getElementById ('corpo1'));
chart.draw(data, options);
}
$(document).ready(function()
{
// Carrega dados caso o usuário já exista
$('#btnGrafico').click(function(e)
{
google.charts.load('current', {'packages':['corechart']});
$.getJSON('getTemperatura.php', function (dados)
{
google.charts.setOnLoadCallback(drawBackgroundColor(dados));
});
})
});
</script>
</head>
<body>
<?php
require_once('conexao.php');
?>
<br><br>
<div class = "flexboxcolumn" id="corpo1" >
<label>Periodo:</label><br><input type = "date" class = "TextBase" id="Data_Periodo" required><br><br>
<button class = "Button">Cadastrar</button><br>
</div>
</body>
