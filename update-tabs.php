<?php  
	include "consulta-DQ.php";
	echo "<ul class='nav nav-tabs'>";
	echo "<li role='presentation'><a href='tela-inicial.php'>Inicial</a></li>";
	foreach ($dqArray as $value) {
		echo "<li class='pessoas' role='presentation' data-valor='".$value['id']."' ><a href='#'>".$value['nome']."</a></li>";	
	}
	echo "<li role='presentation' ><a href='cadastrar-editar-DQ.php'>+</a></li>";
	echo "</ul>";	
?>
