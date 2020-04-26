<?php

	/*Para que o php pegue um array de checkboxes pelo método post pelo menos 1 checkbox precisa está selecionado.
	 Se nenhum for selecionado ele não pega e logo não vai existir*/
	if(isset($_POST['cargo'])){//se algum cargo foi selecionado
	
		$cargo = $_POST['cargo'];//pega o array de cargos selecionados
		$unidades = $_POST['unidades'];//pega o array de inputs de unidades associado a cada cargo
		
		$i = count($cargo);//pega o tamanho do array de cargos
		
		echo("<h1>Valores selecionados:</h1>");
		for($j = 0; $j < $i; $j++){//laço para percorrer o array de cargos
			$indice = ((int) $cargo[$j]) - 1;//pega a posição do input unidades no array relacionado ao checkbox selecionado
			echo("<h2>Cargo ".$cargo[$j]."</h2>");//imprime o cargo
			echo("<h2>Unidades: ".$unidades[$indice]."</h2>");//imprime as unidades
			echo("<br>");
		}
		
	}else{//se nenhum cargo foi selecionado essa mensagem será exibida
	
		echo("<h1>Nenhum cargo selecionado!</h1>");
		
	}
	
	

?>
