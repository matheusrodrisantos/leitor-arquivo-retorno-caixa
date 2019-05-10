<html lang="pt-br">
	<head>
		<title>Retorno CAIXA CNAB240</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/libs/font-awesome.min.css">
		<link rel="stylesheet" href="css/libs/bootstrap.min.css">
		<link rel="stylesheet" href="css/libs/mdb.min.css">
		<link rel="stylesheet" href="css/index.css">
	</head>

	<body>
		<div class="container">
			<form class="md-form text-center border border-light p-5" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
				<p class="h4 mb-4">Importar Arquivo Retorno - CAIXA CNAB240</p>
				<div class="file-field medium">
					<div class="btn btn-rounded aqua-gradient"> 
						<span>Selecione o arquivo</span>
						<input type="file" name="arquivo" id="arquivo"> 			
					</div>
					<div class="file-path-wrapper">
					  <input class="file-path validate" type="text" placeholder="Importe seu arquivo">
					</div>
				</div>
				<input class="form-control mb-4" type="number" name="row" id="row" placeholder="Linha Específica"><br><br>
				<input class="btn btn-info btn-block" type="submit" value="Revisar"><hr>
			</form>
		</div>
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
	  <!-- JQuery -->
		<script type="text/javascript" src="js/libs/jquery-3.2.1.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="js/libs/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="js/libs/mdb.min.js"></script>
		<!-- Your custom commands (optional) -->
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>