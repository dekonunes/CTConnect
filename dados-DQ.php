<!DOCTYPE html>
<html>
	<head>
	<meta charset='utf8'>
	<title>CT-Connect, conectando seu pós tratamento.</title>

	<script language="JavaScript" type="text/javascript" src="jquery-2.1.4.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script src="scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="linha">
			<div class="col-2">
				<img class="imagem" src="imagens/logo.jpg">
			</div>
			<header class="col-10">
				<img class="logo-principal" src="imagens/logo-ct-udesc.jpg">
			</header>
		</div> 
		<div class="linha">
			<div class="col-12">
				<div >
					<?php                   
					    include "update-tabs.php";
					?>
				</div>
			</div>
			
			
		</div>
		<section class="col-12-2">
			<br>
			<div class="classificacaoAux"> 
					<div class="classificacaoAux2">
						<?php include "consulta-dados-DQ.php"; ?>
						<table class="table-Dados-DQ" cellspacing="10">
							<tr>
								<td>Nome: </td>
								<td><?php echo $dqArray[0]["nome"];?></td>
							</tr>
						
							<tr>
								<td>Login: </td>
								<td><?php echo $dqArray[0]["login"];?></td>
							</tr>
							
							<tr>
								<td>Email: </td>
								<td><?php echo $dqArray[0]["nome"];?></td>
							</tr>
							<tr>
								<td>Telefone: </td>
								<td><?php echo $dqArray[0]["telefone"];?></td>
							</tr>
							<tr>
								<td>Idade: </td>
								<td><?php echo $dqArray[0]["idade"];?></td>
							</tr>
							<tr>
								<td>Rua: </td>
								<td><?php echo $dqArray[0]["rua"];?></td>
							</tr>
							<tr>
								<td>Número: </td>
								<td><?php echo $dqArray[0]["numero"];?></td>
							</tr>
							<tr>
								<td>CEP: </td>
								<td><?php echo $dqArray[0]["cep"];?></td>
							</tr>
						</table>
						<br>
						<a href="editar-DQ.html"> Editar dados </a>
					</div>
				</div>
		</section>
		<header class="col-12">
			<a href="configuracoes.html"> Configurações </a>
			<a href="creditos.html"> Créditos </a>
			<a href="cadastro.html"> Sair </a><br>
		</header>>
		

	</body>
</html>