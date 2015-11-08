<!DOCTYPE html>
<html>

<head>
	<title>CT-Connect, conectando seu pós tratamento.</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="style.css">
	<script language="JavaScript" type="text/javascript" src="jquery-2.1.4.min.js"></script>
</head>

<body>

<form method="POST" action="validacao.php">
	<header class="col-10">
				<img class="logo" src="imagens/logo-ct-udesc.jpg">
	</header>
	<div style="width:800px; margin:0 auto;">
	<table>
	<tr>
		<td>
			<label>Usuário: &nbsp;</label>
  			<input type="text" list="idDataList" onkeyup="loadXMLDoc(this.value)" name="usuario" > 
  			<datalist id="idDataList"> </datalist>
   		</td>
	</tr>
	<tr>
		<td>
			<label> Senha: &nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="password" name="senha" maxlength="30"/>
		</td>
	</tr>
	<tr>
		<td>
		<input type="submit" value="Entrar">
		</td>
	</tr>
	<tr>
		<td>
		<a href="cadastro-CT.html"> Cadastrar nova Comunidade </a>
		</td>
	</tr
	</table>
	</div>
	<div id="txtHint" class="resultado" align="left"></div>
</form>


</body>

