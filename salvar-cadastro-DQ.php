<?php
		if(isset($_POST['nome-DQ'])){
			$nome = $_POST['nome-DQ'];
			$login = $_POST['login-DQ'];
			$senha = $_POST['senha-DQ'];
			$email = $_POST['email-DQ'];
			$telefone = $_POST['telefone-DQ'];
			$idade = $_POST['idade-DQ'];
			$rua = $_POST['rua-DQ'];
			$numero = $_POST['numero-DQ'];
			$cep = $_POST['cep-DQ'];
			$questao1 = $_POST['questao-1'];
			$questao2 = $_POST['questao-2'];
			$questao3 = $_POST['questao-3'];
			$questao4 = $_POST['questao-4'];
			$questao5 = $_POST['questao-5'];
			$questao6 = $_POST['questao-6'];
			$questao7 = $_POST['questao-7'];
			$questao8 = $_POST['questao-8'];
			$questao9 = $_POST['questao-9'];
			$questao10 = $_POST['questao-10'];
			$questao11 = $_POST['questao-11'];
			$questao12 = $_POST['questao-12'];
			
			include "conexao.php";
		
			$stmt = mysqli_prepare($conn,"INSERT INTO DQs (nome,login,senha,email,telefone,idade,rua,numero,cep,pergunta1,pergunta2,pergunta3,pergunta4,pergunta5,pergunta6,pergunta7,pergunta8,pergunta9,pergunta10,pergunta11,pergunta12) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?,?,?, ?, ?,?,?, ?, ?,?,?, ?, ?)");
			//envia os parâmetros
			if($stmt) {
				mysqli_stmt_bind_param($stmt,'ssisiisiiiiiiiiiiiiii',$nome,$login,$senha,$email,$telefone,$idade,$rua,$numero,$cep,$questao1,$questao2,$questao3,$questao4,$questao5,$questao6,$questao7,$questao8,$questao9,$questao10,$questao11,$questao12);
				
				//executa a inserção
				mysqli_stmt_execute($stmt);
			}
			printf("%d Row inserted.\n", $stmt->affected_rows);

			//verifica se executou a consulta
			if (!$stmt){
					die('Erro ao inserir dados na base!.\t'.$stmt->error);
			}else{
					echo "Dados inseridos com sucesso";
					
			}
			
			mysqli_stmt_close($stmt);
			include("desconecta.php");
		}

$url = 'tela-inicial.php';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>
