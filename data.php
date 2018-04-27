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
	echo "<h3><b>Arquivo:</b> ".$arquivo.
		 "<br><b>Data:</b> ".$dia."/".$mes."/".$ano.
		 "<br>Tamanho: ".round($tamanhoKB)." Kb 
		  <br><b>Nº Linhas: ".$qtd_linhas."</b> 
		  <br><hr>Linha Verificada: ".$row."
		  </h3>";
?>