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
			<div class="classificacaoAux">
				<form method="post" enctype="multipart/forma-data" action="salvar-cadastro-DQ.php">
					
					<label class="label-cadastro"> Dados:  </label><br><br> 
					<label class="label-cadastro"> Nome: </label><input type="text" name="nome-DQ" maxlength="15">  <br><br>
					<label class="label-cadastro"> Login de acesso: </label><input type="text" name="login-DQ" maxlength="15">  <br><br>
					<label class="label-cadastro"> Senha: </label><input type="password" name="senha-DQ" ><br><br>
					<label class="label-cadastro"> Email: </label><input type="email" name="email-DQ" >  <br><br>
					<label class="label-cadastro"> Telefone:</label><input type="number" name="telefone-DQ">  <br><br>
					<label class="label-cadastro"> Idade:</label><input type="number" name="idade-DQ">  <br><br>
					<label class="label-cadastro"> Endereço:  </label><br><br> 
					<label class="label-cadastro"> Rua: </label><input type="text" name="rua-DQ" maxlength="30">  <br><br>
					<label class="label-cadastro"> Numero: </label><input type="number" name="numero-DQ" maxlength="6">  <br><br>
					<label class="label-cadastro"> CEP: </label><input type="number" name="cep-DQ" maxlength="8">  <br><br>
					<label class="label-cadastro"> Questão 1: </label> <select name="questao-1" >
						<option value="1" > 1 </option>
						<option value="2" > 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5" > 5 </option>
					</select> 

					<label class="label-cadastro"> Questão 2: </label> <select name="questao-2" >
						<option value="1" > 1 </option>
						<option value="2" > 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5" > 5 </option>
					</select> 
					<label class="label-cadastro"> Questão 3: </label> <select name="questao-3" >
						<option value="1" > 1 </option>
						<option value="2" > 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5" > 5 </option>
					</select> 

					<label class="label-cadastro"> Questão 4: </label> <select name="questao-4" >
						<option value="1" > 1 </option>
						<option value="2" > 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5" > 5 </option>
					</select>
					<label class="label-cadastro"> Questão 5: </label> <select name="questao-5" >
						<option value="1" > 1 </option>
						<option value="2" > 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5" > 5 </option>
					</select> 

					<label class="label-cadastro"> Questão 6: </label> <select name="questao-6" >
						<option value="1" > 1 </option>
						<option value="2" > 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5" > 5 </option>
					</select> 
					<label class="label-cadastro"> Questão 7: </label> <select name="questao-7" >
						<option value="1" > 1 </option>
						<option value="2" > 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5" > 5 </option>
					</select> 

					<label class="label-cadastro"> Questão 8: </label> <select name="questao-8" >
						<option value="1" > 1 </option>
						<option value="2" > 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5" > 5 </option>
					</select>
					<label class="label-cadastro"> Questão 9: </label> <select name="questao-9" >
						<option value="1" > 1 </option>
						<option value="2" > 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5" > 5 </option>
					</select> 

					<label class="label-cadastro"> Questão 10: </label> <select name="questao-10" >
						<option value="1" > 1 </option>
						<option value="2" > 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5" > 5 </option>
					</select> 
					<label class="label-cadastro"> Questão 11: </label> <select name="questao-11" >
						<option value="1" > 1 </option>
						<option value="2" > 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5" > 5 </option>
					</select> 

					<label class="label-cadastro"> Questão 12: </label> <select name="questao-12" >
						<option value="1" > 1 </option>
						<option value="2" > 2 </option>
						<option value="3" > 3 </option>
						<option value="4" > 4 </option>
						<option value="5" > 5 </option>
					</select>
						<br><br>
					<input type="submit" value="Enviar">
					<input type="reset" value="Restaurar"><br>
				</form>
			</div>
		</section>
		<header class="col-12">
			<a href="cadastro.html"> Configurações </a>
			<a href="creditos.html"> Créditos </a>
			<a href="cadastro.html"> Sair </a><br>
		</header>>
		

	</body>
</html>