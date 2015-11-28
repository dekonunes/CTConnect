<?php
		$dqArrayAjax = [];	
			
		include "conexao.php";
	
		$consulta = "SELECT * from DQs where id = $id";
		
		//executa a consulta
		$resultado = $conn->query($consulta); 
		
		//verifica se executou a consulta		
		if ($resultado->num_rows > 0 ){
			while($linha  = $resultado->fetch_assoc()){
			array_push($dqArray, $linha);
		}
	}
	$conn->close();
	include("desconecta.php");
		
?> 

