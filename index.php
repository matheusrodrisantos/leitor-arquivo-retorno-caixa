<html>
	<head>
		<meta charset="UTF-8">
		<title>Retorno CAIXA CNAB240</title>
	</head>

	<body>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
			<input type="file" name="arquivo" id="arquivo"><br><br> 
			<label>Linha: </label>
			<input type="number" name="row" id="row"><br><br>
			<input type="submit" value="Revisar"><hr>
		</form>

		<?php
			include('verifica.php');
			
			@$arquivo = $_FILES['arquivo']['name'];
			@$arquivo = $_FILES['arquivo']['name'];
			@$row = $_POST['row'];
			
			if($arquivo){
				if(isset($arquivo)){
					move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo); //MOVE O ARQUIVO AO DIRETÓRIO
				}
				
				include('data.php');
				
				$arq  = fopen('c:\\xampp\htdocs\leitor/'.$arquivo, 'r');
				$num_row = 0; //NUMERO DA LINHA
				
				/****************************LEITURA DO ARQUIVO*****************************************/
				while(!feof($arq)){ //Enquanto nao atingir o fim do arquivo
					$num_row++;
					$linha = fgets($arq); // cria um array com o conteudo da linha atual do arquivo 
					
					if($row == 'Linha Não Informada'){
						include('all_rows.php');						
					}
				}//FIM WHILE (END OF FILE)					
				include('one_row.php');
			}else{
				echo "<h2>Nenhum Arquivo Selecionado</h2>";
			}
			
			
			/*	FUNÇÃO SUBSTR
				substr($var, v1, v2);
				$var = string a ser percorrida
				v1 = onde começa a string
				v2 = numero de caracteres a serem capturados		
			*/
		?>
	</body>
</html>