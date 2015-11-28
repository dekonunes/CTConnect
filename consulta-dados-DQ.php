<?php
		$dqArray = [];
		
		$id = $_REQUEST['id'];
		$id = 1;
		
		include "conexao.php";

		
		$consulta = "SELECT * from DQs where id = ".$id;
		
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

