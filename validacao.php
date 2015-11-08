<?php
  $_SG['conectaServidor'] = true; 
  $_SG['abreSessao'] = true;     
  $_SG['validaSempre'] = true;
  $_SG['servidor'] = 'localhost';
  $_SG['usuario'] = 'root';          
  $_SG['senha'] = '123456';             
  $_SG['banco'] = 'CTConnect';         
  $_SG['tabela'] = 'usuarios';       

if ($_SG['conectaServidor'] == true) {
  $_SG['link'] = mysql_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha']) or die("Não foi possível conectar-se ao servidor [".$_SG['servidor']."].");
  mysql_select_db($_SG['banco'], $_SG['link']) or die("Não foi possível conectar-se ao banco de dados [".$_SG['banco']."].");
}

if ($_SG['abreSessao'] == true)
  session_start();

function validaUsuario($usuario, $senha) {
  global $_SG;
  $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';
  $nusuario = addslashes($usuario);
  $nsenha = addslashes($senha);
  $sql = "SELECT `id`, `nome` FROM `".$_SG['tabela']."` WHERE ".$cS." `usuario` = '".$nusuario."' AND ".$cS." `senha` = '".$nsenha."' LIMIT 1";
  $query = mysql_query($sql);
  $resultado = mysql_fetch_assoc($query);
  if (empty($resultado)) {
    return false;
    echo "string";
  } else {
      $_SESSION['usuarioID'] = $resultado['id']; 
      $_SESSION['usuarioNome'] = $resultado['nome'];
      $_SESSION['usuarioLogin'] = $usuario;
      $_SESSION['usuarioSenha'] = $senha;
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
  $senha = (isset($_POST['senha'])) ? $_POST['senha'] : '';
  if (validaUsuario($usuario, $senha) == 1) {
  echo "Bem vindo";
  $url = 'tela-inicial.html';
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  } else {
  echo "Usuario invalido";
  }

}
?>