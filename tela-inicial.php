<!DOCTYPE html>
<html>
	<head>
	<meta charset='utf8'>
	<title>CT-Connect, conectando seu pós tratamento.</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
					<?php  include "update-tabs.php";?>
				</div>
			</div>
			
		</div>
		<section class="col-12-2" id="div-ajax">
			<div class="geral-classificacaoAux">
				<div class="geral-classificacao">
				<font size="6">Classificação</font>
				<br>
						<div class="classificacao-1" >
						</div>
						<div class="classificacao-2" >
						</div>
						<div class="classificacao-3">
						</div>
						<div class="classificacao-4">
						</div>
						<div class="classificacao-5">
						</div>
				</div>
			</div>
			<br>
			<div class="classificacaoAux">
				<div class="classificacaoAux2">
					<table>
						<tr>
							<th>Categoria</th>
							<th>Perguntas</th>
	   						<th>Classficação</th>
						</tr>		
						<tr id="familia p1">
							<td>Social (diário) </td>
							<td>1 - Família</td>
	   						<td>
	   							<?php include "classificacao1.php"; ?>
							</td>
						</tr>
						<tr id="Amigos p2">
							<td>Social (diário) </td>
							<td>2 - Amigos</td>
	   						<td>
	   							<?php include "classificacao2.php"; ?>
							</td>
						</tr>
						<tr id="Colegas p3" >
							<td>Social (diário) </td>
							<td>3 - Colegas de trabalho</td>
	   						<td>
	   							<?php include "classificacao3.php"; ?>
							</td>
						</tr>
						<tr id="Preconceito p4">
							<td>Sentimento (diário)</td>
							<td>4 - Preconceito</td>
	   						<td>
	   							<?php include "classificacao4.php"; ?>
							</td>
						</tr>
						<tr id="Vontade p5">
							<td>Sentimento (diário) </td>
							<td>5 - Vontade de uso</td>
	   						<td>
	   							<?php include "classificacao5.php"; ?>
							</td>
						</tr>
						<tr id="Humor p6">
							<td>Sentimento (diário) </td>
							<td>6 - Humor</td>
	   						<td>
	   							<?php include "classificacao6.php"; ?>
							</td>
						</tr>
						<tr id="Contato p7">
							<td>Apoio (semanal)</td>
							<td>7 - Contato com a CT</td>
	   						<td>
	   							<?php include "classificacao7.php"; ?>
							</td>
						</tr>
						<tr id="Contato p8">
							<td>Apoio (semanal)</td>
							<td>8 - Contato com AA, CAPS</td>
	   						<td>
	   							<?php include "classificacao8.php"; ?>
							</td>
						</tr>
						<tr id="Espiritualidade p9">
							<td>Apoio (semanal)</td>
							<td>9 - Espiritualidade</td>
	   						<td>
	   							<?php include "classificacao9.php"; ?>
							</td>
						</tr>
						<tr id="Moradia p10">
							<td>Pessoal (longo prazo)</td>
							<td>10 - Moradia</td>
	   						<td>
	   							<?php include "classificacao10.php"; ?>
							</td>
						</tr>
						<tr id="Emprego p11">
							<td>Pessoal (longo prazo)</td>
							<td>11 - Emprego</td>
	   						<td>
	   							<?php include "classificacao11.php"; ?>
							</td>
						</tr>
						<tr id="Capacitação p12">
							<td>Pessoal (longo prazo)</td>
							<td>12 - Capacitação</td>
	   						<td>
	   							<?php include "classificacao12.php"; ?>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="classificacaoAux">	
				<a href="dados-DQ.php"> Dados DQ </a>
			</div>
		</section>
		<footer class="col-12">
			<!--<a href="configuracoes.html"> Configurações </a>-->
			<a href="creditos.php"> Créditos </a>
			<a href="index.php"> Sair </a><br>
		</footer>
	</body>
</html>
