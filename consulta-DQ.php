<?php
		$dqArray = [];
		include "conexao.php";
		
		$consulta = "SELECT id,nome from DQs";
		
		//executa a consulta
		$resultado = $conn->query($consulta); 
			
		//verifica se executou a consulta		
		if ($resultado->num_rows > 0 ){
			while($linha  = $resultado->fetch_assoc()){

				array_push($dqArray, $linha);
			}
		}
	include("desconecta.php");
?> 

