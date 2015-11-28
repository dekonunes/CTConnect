<?php
		if(isset($_POST['nome'])){
			$nome = $_POST['nome'];
			$login = $_POST['login'];
			$senha = $_POST['senha'];
			$email = $_POST['email'];
			$telefone = $_POST['telefone'];
			$rua = $_POST['rua'];
			$numero = $_POST['numero'];
			$cep = $_POST['cep'];
			
			include "conexao.php";
		
			$stmt = mysqli_prepare($conn,"INSERT INTO usuarios (nome,usuario,senha,email,telefone,rua,numero,cep) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
			//envia os parâmetros
			if($stmt) {
				mysqli_stmt_bind_param($stmt,'ssisisii',$nome,$login,$senha,$email,$telefone,$rua,$numero,$cep);
				//$stmt->bind_param('i',$senha);
						
				//executa a inserção
				mysqli_stmt_execute($stmt);
			}
			printf("%d Row inserted.\n", $stmt->affected_rows);

			//verifica se executou a consulta
			if (!$stmt){
					die('Erro ao inserir dados na base!.'.$stmt->error);
			}else{
					echo "Dados inseridos com sucesso";
					
			}
			
			mysqli_stmt_close($stmt);
			include("desconecta.php");
		}

$url = 'index.php';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>
