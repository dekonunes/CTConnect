<?php
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$banco = "CTConnect";

	$conn = new mysqli($servername, $username, $password, $banco);
	// verifica a conexao com o banco
	if ($conn->connect_error) {
		die("Falha de Conexão: " . $conn->connect_error);
	}
	
	//especifica o charset do cliente - usar o mesmo especificado para a página
	$conn->set_charset("utf8");
?>
