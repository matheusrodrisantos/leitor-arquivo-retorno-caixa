<?php
	//Todas as Linhas
	if($num_row == 1){//Header de Arquivo Retorno
		//$inscricao = substr($linha, 17, 1); // CODIGO DE INSCRICAO F/J							
		$situacao = substr($linha, 171, 17); // SITUAÇÃO DO ARQUIVO RETORNO/REMESSA
		$situacao2 = substr($linha, 191, 21); // SITUAÇÃO DO ARQUIVO RETORNO/REMESSA G021/G022
		echo $num_row;
		ver_situacao($situacao, $situacao2);
	}
	
	if($num_row == 2){//Header de Lote de Arquivo Retorno
		//$data_retorno = substr($linha, 191, 8); // DATA DE GRAVAÇÃO DO RETORNO G068
		$num_remessa = substr($linha, 183, 8); // NUMERO DA REMESSA G079	
		echo "<br>".$num_row;
		ver_num_remessa($num_remessa);
	}		
	
	if($num_row > 2){
		//VARIÁVEIS QUE SERVEM A TODAS AS LINHAS						
		$segmento = substr($linha, 13, 1); // CODIGO SEGMENTO DO REGISTRO DETALHE G039 (T,Y)
			
		if($segmento == 'T'){//Segmento T: Movimentação na Carteira
			//$mod_carteira = substr($linha, 39, 2); // MODALIDADE DA CARTEIRA SIGCB G069 	
			$movimento = substr($linha, 15, 2);	//CODIGO DE MOVIMENTO RETORNO C044						 
			$ocorrencia = substr($linha, 213, 2); // CODIGO DE OCORRENCIA C047					
			echo "<br>".$num_row;
			ver_segmento($segmento);
			ver_movimento($movimento);
			ver_ocorrencia($movimento, $ocorrencia);
		}elseif($segmento == 'Y'){//Segmento Y-08: Retorno à Solicitação de Serviços
			$movimento = substr($linha, 15, 2);
			$rejeicao_y = substr($linha, 204, 2); // CÓDIGO DO ERRO
			echo "<br>".$num_row;
			ver_segmento($segmento);
			ver_movimento($movimento);
			ver_ocorrencia($movimento, $ocorrencia);
		}elseif($segmento == 'U'){//Segmento U: Títulos Pagos
			$movimento = substr($linha, 15, 2);
			echo "<br>".$num_row;
			ver_segmento($segmento);
			ver_movimento($movimento);
		}else{
			echo "<br>".$num_row;
			ver_segmento($segmento);
		}
	}//FIM IF LINHAS DEPOIS DE 2
?>