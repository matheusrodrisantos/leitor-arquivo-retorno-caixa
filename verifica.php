<?php
	/* SITUAÇÃO DA REMESSA */		
		function ver_situacao($situacao, $situacao2){
			echo " SITUAÇÃO DA REMESSA: ";
			echo "<b>".$situacao."</b> <b>".$situacao2."</b>";
		}
	
	/* NÚMERO DA REMESSA */
		function ver_num_remessa($num_remessa){
			echo " NÚMERO DA REMESSA: ";
			echo "<b>".$num_remessa."</b>";
		}
		
	/* SEGMENTO REGISTRO DETALHE */
		function ver_segmento($segmento){
			if(@$segmento == " "){
				echo " SEM SEGMENTO: <b>Linha em Branco, Header Ou Trailer </b>";
			}else{
				echo " SEGMENTO: ";
				echo "<b>| ".$segmento." |</b>";
			}
		}
		
	/* IDENTIFICAR MOVIMENTO RETORNO */
		function ver_movimento($movimento){
			echo " MOVIMENTO RETORNO: ";
			switch(@$movimento){
				case '01':
					echo "<b>Solicitação de Impressão de Títulos Confirmada</b>";break;	
				case '02':
					echo "<b>Entrada Confirmada</b>";break;					
				case '03':
					echo "<b>Entrada Rejeitada</b>";break;
				case '04':
					echo "<b>Transferência de Carteira/Entrada</b>";break;
				case '05':
					echo "<b>Transferência de Carteira/Baixa</b>";break;
				case '06':
					echo "<b>Liquidação</b>";break;
				case '07':
					echo "<b>Confirmação do Recebimento da Instrução de Desconto</b>";break;
				case '08':
					echo "<b>Confirmação do Recebimento do Cancelamento do Desconto</b>";break;
				case '09':
					echo "<b>Baixa</b>";break;
				case '12':
					echo "<b>Confirmação Recebimento Instrução de Abatimento</b>";break;
				case '13':
					echo "<b>Confirmação Recebimento Instrução de Cancelamento Abatimento</b>";break;
				case '14':
					echo "<b>Confirmação Recebimento Instrução Alteração de Vencimento</b>";break;
				case '19':
					echo "<b>Confirmação Recebimento Instrução de Protesto</b>";break;
				case '20':
					echo "<b>Confirmação Recebimento Instrução de Sustação/Cancelamento de Protesto</b>";break;
				case '23':
					echo "<b>Remessa a Cartório</b>";break;
				case '24':
					echo "<b>Retirada de Cartório</b>";break;
				case '25':
					echo "<b>Protestado e Baixado (Baixa por Ter Sido Protestado)</b>";break;
				case '26':
					echo "<b>Instrução Rejeitada</b>";break;
				case '27':
					echo "<b>Confirmação do Pedido de Alteração de Outros Dados</b>";break;
				case '28':
					echo "<b>Débito de Tarifas/Custas</b>";break;
				case '30':
					echo "<b>Alteração de Dados Rejeitada</b>";break;
				case '35':
					echo "<b>Confirmação de Inclusão Banco de Pagador</b>";break;
				case '36':
					echo "<b>Confirmação de Alteração Banco de Pagador</b>";break;
				case '37':
					echo "<b>Confirmação de Exclusão Banco de Pagador</b>";break;
				case '38':
					echo "<b>Emissão de Boletos de Banco de Pagador</b>";break;
				case '39':
					echo "<b>Manutenção de Pagador Rejeitada</b>";break;
				case '40':
					echo "<b>Entrada de Título via Banco de Pagador Rejeitada</b>";break;
				case '41':
					echo "<b>Manutenção de Banco de Pagador Rejeitada</b>";break;
				case '44':
					echo "<b>Estorno de Baixa / Liquidação</b>";break;
				case '45':
					echo "<b>Alteração de Dados</b>";break;
				case '46':
					echo "<b>Liquidação On-line</b>";break;
				case '47':
					echo "<b>Estorno de Liquidação On-line</b>";break;
				case '51':
					echo "<b>Título DDA reconhecido pelo pagador</b>";break;
				case '52':
					echo "<b>Título DDA não reconhecido pelo pagador</b>";break;
				case '53':
					echo "<b>Título DDA recusado pela CIP</b>";break;
				case '61':
					echo "<b>Confirmação de alteração do valor nominal do título</b>";break;
				case '62':
					echo "<b>Confirmação de alteração do valor/percentual mínimo/máximo</b>";break;				
				default:
					echo "<b>Cód Mov. Retorno Inválido</b>";break;
			}
		}//FIM DA FUNÇÃO
		
	/* IDENTIFICAR OCORRÊNCIA C047(A,B,C)*/
		function ver_ocorrencia($movimento, $ocorrencia){
			if(@$movimento == '26' || @$movimento == '02' || @$movimento == '03' || @$movimento == '30'){
				echo " OCORRÊNCIA: ";
				switch(@$ocorrencia){
					case 'AA':
						echo "<b>Cód Desconto Preenchido, Obrig Data e Valor/Perc</b>";break;
					case 'AB':
						echo "<b>Cod Desconto Obrigatório p/ Cód Mov = 7</b>";break;
					case 'AC':
						echo "<b>Forma de Cadastramento Inválida</b>";break;	
					case 'AD':
						echo "<b>Data de Desconto deve estar em Ordem Crescente</b>";break;
					case 'AE':
						echo "<b>Data de Desconto é Posterior a Data de Vencimento</b>";break;
					case 'AF':
						echo "<b>Título não está com situação “Em Aberto”</b>";break;
					case 'AG':
						echo "<b>Título já está Vencido / Vencendo</b>";break;
					case 'AH':
						echo "<b>Não existe desconto a ser cancelado</b>";break;
					case 'AI':
						echo "<b>Data solicitada p/ Prot/Dev é anterior à data atual</b>";break;
					case 'AJ':
						echo "<b>Código do Pagador Inválido</b>";break;
					case 'AK':
						echo "<b>Número da Parcela Invalida ou Fora de Sequencia</b>";break;
					case 'AL':
						echo "<b>Estorno de Envio Não Permitido</b>";break;
					case 'AM':
						echo "<b>Nosso Numero Fora de Sequencia</b>";break;
					case 'A4':
						echo "<b>Pagador DDA</b>";break;
					case 'B2':
						echo "<b>Valor Nominal do Título Conflitante</b>";break;
					case 'CA':
						echo "<b>Autorização de pagamento parcial inválida</b>";break;
					case 'CB':
						echo "<b>Identificação do tipo de pagamento inválida</b>";break;
					case 'CC':
						echo "<b>Quantidade de pagamentos possíveis inválida</b>";break;
					case 'CD':
						echo "<b>Tipo de valor máximo inválido</b>";break;
					case 'CE':
						echo "<b>Valor/percentual máximo inválido</b>";break;
					case 'CF':
						echo "<b>Tipo de valor mínimo inválido</b>";break;
					case 'CG':
						echo "<b>Valor/percentual mínimo inválido</b>";break;
					case 'CH':
						echo "<b>Segmento Y53 não informado</b>";break;
					case 'CI':
						echo "<b>Alteração do valor/percentual mínimo/máximo inválida para o tipo de pagamento do título</b>";break;
					case 'CJ':
						echo "<b>Valor/percentual mínimo/máximo igual ao cadastrado</b>";break;
					case 'CK':
						echo "<b>Título autorizado para pagamentos parciais não pode ser desautorizado</b>";break;
					case 'CL':
						echo "<b>Quantidade de pagamentos possíveis menor que a quantidade de pagamentos realizados</b>";break;
					case 'VA':
						echo "<b>Arq.Ret.Inexis. P/ Redisp. Nesta Dt/Nro</b>";break;
					case 'VB':
						echo "<b>Registro Duplicado</b>";break;
					case 'VC':
						echo "<b>Beneficiário deve ser padrão CNAB240</b>";break;
					case 'VD':
						echo "<b>Ident. Banco Pagador Inválida</b>";break;
					case 'VE':
						echo "<b>Num Docto Cobr Inválido</b>";break;
					case 'VF':
						echo "<b>Vlr/Perc a ser concedido inválido</b>";break;
					case 'VG':
						echo "<b>Data de Inscrição Inválida</b>";break;
					case 'VH':
						echo "<b>Data Movto Inválida</b>";break;
					case 'VI':
						echo "<b>Data Inicial Inválida</b>";break;
					case 'VJ':
						echo "<b>Data Final Inválida</b>";break;
					case 'VK':
						echo "<b>Banco de Pagador já cadastrado</b>";break;
					case 'VL':
						echo "<b>Beneficiário não cadastrado</b>";break;
					case 'VM':
						echo "<b>Número de Lote Duplicado</b>";break;
					case 'VN':
						echo "<b>Forma de Emissão de Boleto Inválida</b>";break;
					case 'VO':
						echo "<b>Forma Entrega Boleto Inválida p/ Emissão via Banco</b>";break;
					case 'VP':
						echo "<b>Forma Entrega Boleto Invalida p/ Emissão via Beneficiário</b>";break;	
					case 'VQ':
						echo "<b>Opção para Endosso Inválida</b>";break;
					case 'VR':
						echo "<b>Tipo de Juros ao Mês Inválido</b>";break;
					case 'VS':
						echo "<b>Percentual de Juros ao Mês Inválido</b>";break;
					case 'VT':
						echo "<b>Percentual / Valor de Desconto Inválido</b>";break;
					case 'VU':
						echo "<b>Prazo de Desconto Inválido</b>";break;
					case 'VV':
						echo "<b>Preencher Somente Percentual ou Valor</b>";break;
					case 'VW':
						echo "<b>Prazo de Multa Invalido</b>";break;
					case 'VX':
						echo "<b>Perc. Desconto tem que estar em ordem decrescente</b>";break;
					case 'VY':
						echo "<b>Valor Desconto tem que estar em ordem decrescente</b>";break;
					case 'VZ':
						echo "<b>Dias/Data desconto tem que estar em ordem decrescente</b>";break;
					case 'WA':
						echo "<b>Vlr Contr p/ aquisição de Bens Inválid</b>";break;
					case 'WB':
						echo "<b>Vlr Contr p/ Fundo de Reserva Inválid</b>";break;
					case 'WC':
						echo "<b>Vlr Rend. Aplicações Financ Inválido</b>";break;
					case 'WD':
						echo "<b>Valor Multa/Juros Monetários Inválido</b>";break;
					case 'WE':
						echo "<b>Valor Prêmios de Seguro Inválido</b>";break;
					case 'WF':
						echo "<b>Valor Custas Judiciais Inválido</b>";break;
					case 'WG':
						echo "<b>Valor Reembolso de Despesas Inválido</b>";break;
					case 'WH':
						echo "<b>Valor Outros Inválido</b>";break;
					case 'WI':
						echo "<b>Valor de Aquisição de Bens Inválido</b>";break;
					case 'WJ':
						echo "<b>Valor Devolvido ao Consorciado Inválido</b>";break;
					case 'WK':
						echo "<b>Vlr Desp. Registro de Contrato Inválido</b>";break;
					case 'WL':
						echo "<b>Valor de Rendimentos Pagos Inválido</b>";break;
					case 'WM':
						echo "<b>Data de Descrição Inválida</b>";break;
					case 'WN':
						echo "<b>Valor do Seguro Inválido</b>";break;
					case 'WO':
						echo "<b>Data de Vencimento Inválida</b>";break;
					case 'WP':
						echo "<b>Data de Nascimento Inválida</b>";break;
					case 'WQ':
						echo "<b>CPF/CNPJ do Aluno Inválido</b>";break;
					case 'WR':
						echo "<b>Data de Avaliação Inválida</b>";break;
					case 'WS':
						echo "<b>CPF/CNPJ do Locatário Inválido</b>";break;
					case 'WT':
						echo "<b>Literal da Remessa Inválida</b>";break;
					case 'WU':
						echo "<b>Tipo de Registro Inválido</b>";break;
					case 'WV':
						echo "<b>Modelo Inválido</b>";break;
					case 'WW':
						echo "<b>Código do Banco de Pagadores Inválido</b>";break;
					case 'WX':
						echo "<b>Banco de Pagadores não Cadastrado</b>";break;
					case 'WY':
						echo "<b>Qtde dias para Protesto tem que estar entre 2 e 90</b>";break;
					case 'WZ':
						echo "<b>Não existem Pagadores para este Banco</b>";break;
					case 'XA':
						echo "<b>Preço Unitário do Produto Inválido</b>";break;
					case 'XB':
						echo "<b>Preço Total do Produto Inválido</b>";break;
					case 'XC':
						echo "<b>Valor Atual do Bem Inválido</b>";break;
					case 'XD':
						echo "<b>Quantidade de Bens Entregues Inválido</b>";break;
					case 'XE':
						echo "<b>Quantidade de Bens Distribuídos Inválido</b>";break;
					case 'XF':
						echo "<b>Quantidade de Bens não Distribuídos Inválido</b>";break;
					case 'XG':
						echo "<b>Número da Próxima Assembleia Inválido</b>";break;
					case 'XH':
						echo "<b>Horário da Próxima Assembleia Inválido</b>";break;
					case 'XI':
						echo "<b>Data da Próxima Assembleia Inválida</b>";break;
					case 'XJ':
						echo "<b>Número de Ativos Inválido</b>";break;
					case 'XK':
						echo "<b>Número de Desistentes Excluídos Inválido</b>";break;
					case 'XL':
						echo "<b>Número de Quitados Inválido</b>";break;
					case 'XM':
						echo "<b>Número de Contemplados Inválido</b>";break;
					case 'XN':
						echo "<b>Número de não Contemplados Inválido</b>";break;
					case 'XO':
						echo "<b>Data da Última Assembleia Inválida</b>";break;
					case 'XP':
						echo "<b>Quantidade de Prestações Inválida</b>";break;
					case 'XQ':
						echo "<b>Data de Vencimento da Parcela Inválida</b>";break;
					case 'XR':
						echo "<b>Valor da Amortização Inválida</b>";break;
					case 'XS':
						echo "<b>Código do Personalizado Inválido</b>";break;
					case 'XT':
						echo "<b>Valor da Contribuição Inválida</b>";break;
					case 'XU':
						echo "<b>Percentual da Contribuição Inválido</b>";break;
					case 'XV':
						echo "<b>Valor do Fundo de Reserva Inválido</b>";break;
					case 'XW':
						echo "<b>Número Parcela Inválido ou Fora de Sequência</b>";break;
					case 'XX':
						echo "<b>Percentual Fundo de Reserva Inválido</b>";break;
					case 'XY':
						echo "<b>Prz Desc/Multa Preenchido, Obrigat.Perc. ou Valor</b>";break;
					case 'XZ':
						echo "<b>Valor Taxa de Administração Inválida</b>";break;
					case 'YA':
						echo "<b>Data de Juros Inválida ou Não Informada</b>";break;
					case 'YB':
						echo "<b>Data Desconto Inválida ou Não Informada</b>";break;
					case 'YC':
						echo "<b>E-mail Inválido</b>";break;
					case 'YD':
						echo "<b>Código de Ocorrência Inválido</b>";break;
					case 'YE':
						echo "<b>Pagador já Cadastrado (Banco de Pagadores)</b>";break;
					case 'YF':
						echo "<b>Pagador não Cadastrado (Banco de Pagadores)</b>";break;
					case 'YG':
						echo "<b>Remessa Sem Registro Tipo 9</b>";break;
					case 'YH':
						echo "<b>Identificação da Solicitação Inválida</b>";break;
					case 'YI':
						echo "<b>Quantidade Boletos Solicitada Inválida</b>";break;
					case 'YJ':
						echo "<b>Trailer do Arquivo não Encontrado</b>";break;
					case 'YK':
						echo "<b>Tipo Inscrição do Responsável Inválido</b>";break;
					case 'YL':
						echo "<b>Número Inscrição do Responsável Inválido</b>";break;
					case 'YM':
						echo "<b>Ajuste de Vencimento Inválido</b>";break;
					case 'YN':
						echo "<b>Ajuste de Emissão Inválido</b>";break;
					case 'YO':
						echo "<b>Código de Modelo Inválido</b>";break;
					case 'YP':
						echo "<b>Vía de Entrega Inválido</b>";break;
					case 'YQ':
						echo "<b>Espécie Banco de Pagador Inválido</b>";break;
					case 'YR':
						echo "<b>Aceite Banco de Pagador Inválido</b>";break;
					case 'YS':
						echo "<b>Pagador já Cadastrado</b>";break;
					case 'YT':
						echo "<b>Pagador não Cadastrado</b>";break;
					case 'YU':
						echo "<b>Número do Telefone Inválido</b>";break;
					case 'YV':
						echo "<b>CNPJ do Condomínio Inválido</b>";break;
					case 'YW':
						echo "<b>Indicador de Registro de Título Inválido</b>";break;
					case 'YX':
						echo "<b>Valor da Nota Inválido</b>";break;
					case 'YY':
						echo "<b>Qtde de dias para Devolução tem que estar entre 1 e 999</b>";break;
					case 'YZ':
						echo "<b>Quantidade de Produtos Inválida</b>";break;
					case 'ZA':
						echo "<b>Perc. Taxa de Administração Inválido</b>";break;
					case 'ZB':
						echo "<b>Valor do Seguro Inválido</b>";break;
					case 'ZC':
						echo "<b>Percentual do Seguro Inválido</b>";break;
					case 'ZD':
						echo "<b>Valor da Diferença da Parcela Inválido</b>";break;
					case 'ZE':
						echo "<b>Perc. Da Diferença da Parcela Inválido</b>";break;
					case 'ZF':
						echo "<b>Valor Reajuste do Saldo de Caixa Inválido</b>";break;
					case 'ZG':
						echo "<b>Perc. Reajuste do Saldo de Caixa Inválido</b>";break;
					case 'ZH':
						echo "<b>Valor Total a Pagar Inválido</b>";break;
					case 'ZY':
						echo "<b>Percentual ao Total a Pagar Inválido</b>";break;
					case 'ZJ':
						echo "<b>Valor de Outros Acréscimos Inválido</b>";break;
					case 'ZK':
						echo "<b>Perc. De Outros Acréscimos Inválido</b>";break;
					case 'ZL':
						echo "<b>Valor de Outras Deduções Inválido</b>";break;
					case 'ZM':
						echo "<b>Perc. De Outras Deduções Inválido</b>";break;
					case 'ZN':
						echo "<b>Valor da Contribuição Inválida</b>";break;
					case 'ZO':
						echo "<b>Percentual da Contribuição Inválida</b>";break;
					case 'ZP':
						echo "<b>Valor de Juros/Multa Inválido</b>";break;
					case 'ZQ':
						echo "<b>Percentual de Juros/Multa Inválido</b>";break;
					case 'ZR':
						echo "<b>Valor Cobrado Inválido</b>";break;
					case 'ZS':
						echo "<b>Percentual Cobrado Inválido</b>";break;
					case 'ZT':
						echo "<b>Valor Disponibilizado em Caixa Inválido</b>";break;
					case 'ZU':
						echo "<b>Valor Depósito Bancário Inválido</b>";break;
					case 'ZV':
						echo "<b>Valor Aplicações Financeiras Inválido</b>";break;
					case 'ZW':
						echo "<b>Data/Valor Preenchidos, Obrigatório Código Desconto</b>";break;
					case 'ZX':
						echo "<b>Valor Cheques em Cobrança Inválido</b>";break;
					case 'ZY':
						echo "<b>Desconto c/ valor Fixo, Obrigatório Valor do Título</b>";break;
					case 'ZZ':
						echo "<b>Código Movimento Inválido p/ Segmento Y8</b>";break;	
					case '01':
						echo "<b>Código do banco inválido</b>";break;
					case '02':
						echo "<b>Código do Registro Inválido</b>";break;
					case '03':
						echo "<b>Código do Segmento Inválido</b>";break;
					case '04':
						echo "<b>Código do Movimento não Permitido p/ Carteira</b>";break;
					case '05':
						echo "<b>Código do Movimento Inválido</b>";break;
					case '06':
						echo "<b>Tipo Número Inscrição Beneficiário Inválido</b>";break;
					case '07':
						echo "<b>Agencia Conta DV Inválidos</b>";break;
					case '08':
						echo "<b>Nosso Número Inválido</b>";break;
					case '09':
						echo "<b>Nosso Número Duplicado</b>";break;
					case '10':
						echo "<b>Carteira Inválida</b>";break;
					case '11':
						echo "<b>Data de Geração Inválida</b>";break;
					case '12':
						echo "<b>Tipo de Documento Inválido</b>";break;
					case '13':
						echo "<b>Identif. Da Emissão do Boleto Inválida</b>";break;
					case '14':
						echo "<b>Identif. Da Distribuição do Boleto Inválida</b>";break;
					case '15':
						echo "<b>Características Cobrança Incompatíveis</b>";break;
					case '16':
						echo "<b>Data de Vencimento Inválida</b>";break;
					case '17':
						echo "<b>Data de Vencimento Anterior à Data de Emissão</b>";break;
					case '18':
						echo "<b>Vencimento fora do prazo de operação</b>";break;
					case '19':
						echo "<b>Título a Cargo de Bco Correspondentes c/ Vencto Inferior a XX Dias</b>";break;
					case '20':
						echo "<b>Valor do Título Inválido</b>";break;
					case '21':
						echo "<b>Espécie do Título Inválida</b>";break;
					case '22':
						echo "<b>Espécie do Título Não Permitida para a Carteira</b>";break;
					case '23':
						echo "<b>Aceite Inválido</b>";break;
					case '24':
						echo "<b>Data da Emissão Inválida</b>";break;	
					case '25':
						echo "<b>Data da Emissão Posterior a Data de Entrada</b>";break;
					case '26':
						echo "<b>Código de Juros de Mora Inválido</b>";break;
					case '27':
						echo "<b>Valor/Taxa de Juros de Mora Inválido</b>";break;
					case '28':
						echo "<b>Código do Desconto Inválido</b>";break;
					case '29':
						echo "<b>Valor do Desconto Maior ou Igual ao Valor do Título</b>";break;
					case '30':
						echo "<b>Desconto a Conceder Não Confere</b>";break;
					case '31':
						echo "<b>Concessão de Desconto - Já Existe Desconto Anterior</b>";break;
					case '32':
						echo "<b>Valor do IOF Inválido</b>";break;
					case '33':
						echo "<b>Valor do Abatimento Inválido</b>";break;	
					case '34':
						echo "<b>Valor do Abatimento Maior ou Igual ao Valor do Título</b>";break;
					case '35':
						echo "<b>Valor Abatimento a Conceder Não Confere</b>";break;
					case '36':
						echo "<b>Concessão de Abatimento - Já Existe Abatimento Anterior</b>";break;
					case '37':
						echo "<b>Código para Protesto Inválido</b>";break;
					case '38':
						echo "<b>Prazo para Protesto Inválido</b>";break;
					case '39':
						echo "<b>Pedido de Protesto Não Permitido para o Título</b>";break;
					case '40':
						echo "<b>Título com Ordem de Protesto Emitida</b>";break;
					case '41':
						echo "<b>Pedido Cancelamento/Sustação p/ Títulos sem Instrução Protesto</b>";break;
					case '42':
						echo "<b>Código para Baixa/Devolução Inválido</b>";break;
					case '43':
						echo "<b>Prazo para Baixa/Devolução Inválido</b>";break;
					case '44':
						echo "<b>Código da Moeda Inválido</b>";break;
					case '45':
						echo "<b>Nome do Pagador Não Informado</b>";break;
					case '46':
						echo "<b>Tipo/Número de Inscrição do Pagador Inválidos</b>";break;
					case '47':
						echo "<b>Endereço do Pagador Não Informado</b>";break;
					case '48':
						echo "<b>CEP Inválido</b>";break;
					case '49':
						echo "<b>CEP Sem Praça de Cobrança (Não Localizado)</b>";break;
					case '50':
						echo "<b>CEP Referente a um Banco Correspondente</b>";break;
					case '51':
						echo "<b>CEP incompatível com a Unidade da Federação</b>";break;
					case '52':
						echo "<b>Unidade da Federação Inválida</b>";break;
					case '53':
						echo "<b>Tipo/Número de Inscrição do Sacador/Avalista Inválidos</b>";break;
					case '54':
						echo "<b>Sacador/Avalista Não Informado</b>";break;
					case '55':
						echo "<b>Nosso número no Banco Correspondente Não Informado</b>";break;
					case '56':
						echo "<b>Código do Banco Correspondente Não Informado</b>";break;
					case '57':
						echo "<b>Código da Multa Inválido</b>";break;
					case '58':
						echo "<b>Data da Multa Inválida</b>";break;
					case '59':
						echo "<b>Valor/Percentual da Multa Inválido</b>";break;
					case '60':
						echo "<b>Movimento para Título Não Cadastrado</b>";break;
					case '61':
						echo "<b>Alteração da Agência Cobradora/DV Inválida</b>";break;
					case '62':
						echo "<b>Tipo de Impressão Inválido</b>";break;
					case '63':
						echo "<b>Entrada para Título já Cadastrado</b>";break;
					case '64':
						echo "<b>Entrada Inválida para Cobrança Caucionada</b>";break;
					case '65':
						echo "<b>CEP do Pagador não encontrado</b>";break;
					case '66':
						echo "<b>Agencia Cobradora não encontrada</b>";break;
					case '67':
						echo "<b>Agencia Beneficiário não encontrada</b>";break;
					case '68':
						echo "<b>Movimentação inválida para título</b>";break;
					case '69':
						echo "<b>Alteração de dados inválida</b>";break;
					case '70':
						echo "<b>Apelido do cliente não cadastrado</b>";break;
					case '71':
						echo "<b>Erro na composição do arquivo</b>";break;
					case '72':
						echo "<b>Lote de serviço inválido</b>";break;
					case '73':
						echo "<b>Código do Beneficiário inválido</b>";break;
					case '74':
						echo "<b>Beneficiário não pertencente a Cobrança Eletrônica</b>";break;
					case '75':
						echo "<b>Nome da Empresa inválido</b>";break;
					case '76':
						echo "<b>Nome do Banco inválido</b>";break;
					case '77':
						echo "<b>Código da Remessa inválido</b>";break;
					case '78':
						echo "<b>Data/Hora Geração do arquivo inválida</b>";break;
					case '79':
						echo "<b>Número Sequencial do arquivo inválido</b>";break;
					case '80':
						echo "<b>Versão do Lay out do arquivo inválido</b>";break;
					case '81':
						echo "<b>Literal REMESSA-TESTE - Válido só p/ fase testes</b>";break;
					case '82':
						echo "<b>Literal REMESSA-TESTE - Obrigatório p/ fase testes</b>";break;
					case '83':
						echo "<b>Tp Número Inscrição Empresa inválido</b>";break;
					case '84':
						echo "<b>Tipo de Operação inválido</b>";break;
					case '85':
						echo "<b>Tipo de serviço inválido</b>";break;
					case '86':
						echo "<b>Forma de lançamento inválido</b>";break;				
					case '87':
						echo "<b>Número da remessa inválido</b>";break;
					case '88':
						echo "<b>Número da remessa menor/igual remessa anterior</b>";break;
					case '89':
						echo "<b>Lote de serviço divergente</b>";break;
					case '90':
						echo "<b>Número sequencial do registro inválido</b>";break;
					case '91':
						echo "<b>Erro seq de segmento do registro detalhe</b>";break;
					case '92':
						echo "<b>Cod movto divergente entre grupo de segm</b>";break;
					case '93':
						echo "<b>Qtde registros no lote inválido</b>";break;
					case '94':
						echo "<b>Qtde registros no lote divergente</b>";break;
					case '95':
						echo "<b>Qtde lotes no arquivo inválido</b>";break;
					case '96':
						echo "<b>Qtde lotes no arquivo divergente</b>";break;
					case '97':
						echo "<b>Qtde registros no arquivo inválido</b>";break;
					case '98':
						echo "<b>Qtde registros no arquivo divergente</b>";break;
					case '99':
						echo "<b>Código de DDD inválido</b>";break;
					default:
						echo $ocorrencia;
				}// FIM SWITCH
			}elseif(@$movimento == '28'){
				switch(@$ocorrencia){
					case '01':
						echo "<b>Tarifa de Emissão de Extrato de Posição</b>";break;
					case '02':
						echo "<b>Tarifa de Manutenção de Título Vencido</b>";break;
					case '03':
						echo "<b>Tarifa de Sustação</b>";break;
					case '04':
						echo "<b>Tarifa de Protesto</b>";break;
					case '05':
						echo "<b>Tarifa de Outras Instruções</b>";break;
					case '06':
						echo "<b>Tarifa de Outras Ocorrências</b>";break;
					case '07':
						echo "<b>Tarifa de Envio de Duplicata ao Pagador</b>";break;
					case '08':
						echo "<b>Custas de Protesto</b>";break;
					case '09':
						echo "<b>Custas de Sustação de Protesto</b>";break;
					case '10':
						echo "<b>Custas de Cartório Distribuidor</b>";break;
					case '11':
						echo "<b>Custas de Edital</b>";break;
					case '12':
						echo "<b>Redisponibilização de Arquivo Retorno Eletrônico</b>";break;
					case '13':
						echo "<b>Tarifa Sobre Registro Cobrada na Baixa/Liquidação</b>";break;
					case '14':
						echo "<b>Tarifa Sobre Reapresentação Automática</b>";break;
					case '15':
						echo "<b>Banco de Pagadores</b>";break;
					case '16':
						echo "<b>Tarifa Sobre Informações Via Fax</b>";break;
					case '17':
						echo "<b>Entrega Aviso Disp Boleto via e-mail ao pagador (s/ emissão Boleto)</b>";break;
					case '18':
						echo "<b>Emissão de Boleto Pré-impresso CAIXA matricial</b>";break;
					case '19':
						echo "<b>Emissão de Boleto Pré-impresso CAIXA A4</b>";break;
					case '20':
						echo "<b>Emissão de Boleto Padrão CAIXA</b>";break;
					case '21':
						echo "<b>Emissão de Boleto/Carnê</b>";break;
					case '31':
						echo "<b>Emissão de Aviso de Vencido</b>";break;
					case '42':
						echo "<b>Alteração cadastral de dados do título - sem emissão de aviso</b>";break;
					case '45':
						echo "<b>Emissão de 2ª via de Boleto Cobrança Registrada</b>";break;
					default:
				} 
			}/*elseif(@$movimento == '06' || @$movimento == '09' || @$movimento == '17'){
				switch(@$ocorrencia){
					//Liquidação
					case '02':
						echo"<b>Casa Lotérica</b>";break;
					case '03':
						echo"<b>Agências CAIXA</b>";break;
					case '04':
						echo"<b>Compensação Eletrônica</b>";break;
					case '05':
						echo"<b>Compensação Convencional</b>";break;
					case '06':
						echo"<b>Internet Banking</b>";break;
					case '07':
						echo"<b>Correspondente Bancário</b>";break;
					case '08':
						echo"<b>Em Cartório</b>";break;
					//Baixa
					case '09':
						echo"<b>Comandada Banco</b>";break;
					case '10':
						echo"<b>Comandada Cliente via Arquivo</b>";break;
					case '11':
						echo"<b>Comandada Cliente On-line</b>";break;
					case '12':
						echo"<b>Decurso Prazo – Cliente</b>";break;
					case '13':
						echo"<b>Decurso Prazo – Banco</b>";break;
					case '14':
						echo"<b>Protestado</b>";break;
					default:
				}
			}*/
		}
	
	/* IDENTIFICAR INSCRIÇÃO (DESATIVADO) */  
		/*echo "<br>TIPO DA INSCRIÇÃO: ";
		switch($inscricao){
			case 1:
		echo "Física";break;
			case 2:
		echo "Jurídica";break;
			default:
		echo "Inválido( VERIFICAR )";
		}*/
	
	/* DATA DE GRAVAÇÃO DO RETORNO (DESATIVADO)*/
		/*if(@$data_retorno){
			$dia_ret = substr($data_retorno, 0, 2);
			$mes_ret = substr($data_retorno, 2, 2);
			$ano_ret = substr($data_retorno, 4, 4);
			echo "<br>GRAVAÇÃO DO RETORNO: <b>".$dia_ret."/".$mes_ret."/".$ano_ret."</b>";
		}*/
		
	/* MODALIDADE CARTEIRA SIGCB (DESATIVADO)*/
		/*if(@$segmento == 'T'){ 		
			if(@$mod_carteira){
				echo "<br>MODALIDADE CARTEIRA (SIGCB): ";
				switch(@$mod_carteira){
					case '11':
						echo "<b>título Registrado, emissão CAIXA</b>";break;	
					case '14':
						echo "<b>título Registrado, emissão Beneficiário</b>";break;					
					case '21':
						echo "<b>título Sem Registro, emissão CAIXA</b>";break;
					case '24':
						echo "<b>título Sem Registro, emissão Beneficiário</b>";break;
					default:
						echo "<b>Número Livre</b>";
				}
			}	
		}*/
?>