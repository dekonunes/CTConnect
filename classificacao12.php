<?php  
		include 'consulta-dados-DQ.php';
		$valor = $dqArray[0]["pergunta12"];
		for ($i = 1; $i <= 5; $i++) {
			if ($i == $valor) {
				echo "<div class='cls classificacao-".$i."'></div>";
			} else {
				echo "<div class='cls classificacao-".$i."-desativado'></div>";
			}
		}

?>
