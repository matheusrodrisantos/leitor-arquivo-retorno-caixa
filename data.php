<?php
	//DATA DO RECEBIMENTO DO RETORNO
	$data = substr($arquivo, 3, 8);
	$ano = substr($data, 0, 4);
	$mes = substr($data, 4, 2);
	$dia = substr($data, 6, 2);
	
	//Cálculo do tamanho do arquivo
	$tamanho = filesize($arquivo); //Bytes
	$tamanhoKB = $tamanho/1024; //Kb 
	$tamanhoMB = $tamanhoKB/1024; //Mb
	
	//Quantidade de linhas do arquivo
	$qtd_linhas = count(file($arquivo));
	
	//Linha Verificável
	if(!$row){
		$row = 'Linha Não Informada';
	}	
	
	//DADOS EXIBIDOS NA TELA
	echo "<div class='card text-center border border-dark mt-2'>
		  <h3><b>Arquivo:</b> ".$arquivo.
		 "<br><b>Data:</b> ".$dia."/".$mes."/".$ano.
		 "<br><b>Tamanho:</b> ".round($tamanhoKB)." Kb 
		  <br><b>Nº Linhas: </b>".$qtd_linhas." 		  
		  <br><b>Linha Verificada: </b>".$row."</div>
		  <br></h3>";
?>