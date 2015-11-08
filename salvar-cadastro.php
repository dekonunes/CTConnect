<?php
mysqli_connect($server, $username, $password);
$servername = "localhost";
$username = "root";
$password = "123456";


$connection=mysqli_connect($servername, $username, $password);

if (!$connection){
	die ("Erro ao conectar com DB: ". mysqli_connect_error());
}

$db_name = "CTConnect";
$db_select=mysqli_select_db($connection,$db_name);

if (!$db_select)
{
 die ("Base não pode ser selecionada: ". mysql_error());
}

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];

mysqli_query($connection,"SELECT * FROM CTconnect");
mysqli_query($connection,"INSERT INTO usuarios (nome,usuario,senha,email,telefone,rua,numero,cep) 
		VALUES ('$nome', '$login' ,'$senha','$email','$telefone','$rua','$numero','$cep')"); 

$query = sprintf("SELECT firstname, link, descricao,tam FROM img");
//$dados = mysql_query($query, $connection) or die(mysql_error());

$linha = mysql_fetch_assoc($dados); 

$total = mysql_num_rows($dados);

mysqli_close($connection);

$url = 'index.php';
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
?>
