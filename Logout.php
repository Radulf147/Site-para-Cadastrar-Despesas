<?php
// Inicia ou confirma a sessão ativa
session_start();

// Finaliza a sessão, destruindo todos os dados da sessão no servidor
session_destroy();

// Libera a conexão com o banco de dados, se necessário
$pdo = null;

// Redireciona para a tela de login
header('Location: Tela De Login.php');
exit(); // Interrompe a execução após o redirecionamento
?>
