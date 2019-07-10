<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Pesquisar Produto</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta charset="utf-8">
</head>
<body>
	<?php 
		include("../layouts.php");
		$links = null; //ex.: array('Facebook' => 'https://facebook.com')
		$titulo = "Lojinha do PHP";
		$conteudoEsquerda[] = 
		"<h1>Cadastro de Produto</h1>
				<div class='fundoForm'>
					<form method='POST' action='exibirCadastro.php'>
						<label class='textTitulo' for='produto'>Produto</label><br>
						<input type='text' id='user' name='nome' size='20' placeholder='Digite o nome do produto..'>	<br>
						<label class='textTitulo' for='fab'>Fabricante</label>
						<input type='text' name='fabricante' id='fab' size='25' placeholder='Digite o nome do fabricante..'>
						<label class='textTitulo' for='custo'>Custo</label>
						<input type='number' name='custo' id='custo' size='6' step='0.01' placeholder='Digite o custo do produto..'>
						<label class='textTitulo' for='venda'>Venda</label>
						<input type='number' name='venda' id='venda' size='6' step='0.01' placeholder='Digite o valor de venda do produto..'>
						<label class='textTitulo' for='desc'>Descrição</label><br>
						<textarea type='text' name='descricao' id='desc' rows='4' cols='50' placeholder='Digite uma descrição para o produto..'></textarea>

						<div class='textTitulo'>Tipo de Produto</div>

						<input type='radio' name='tipo' id='alim' value='Alimento' checked><label for='alim'>Alimento</label><br>
						<input type='radio' name='tipo' id='limp' value='Limpeza' ><label for='limp'>Limpeza</label><br>
						<input type='radio' name='tipo' id='bebi' value='Bebida' ><label for='bebi'>Bebida</label><br>

						<div class='textTitulo'>Indicação do Poduto</div>

						<input type='radio' name='indicacao' id='uni' value='Unidade' checked><label for='uni'>Unidade</label><br>
						<input type='radio' name='indicacao' id='qui' value='Quilo'><label for='qui'>Quilo</label><br>
						<input type='radio' name='indicacao' id='pac' value='Pacote'><label for='pac'>Pacote</label><br>

						<input type='submit' name='Enviar'>
					</form>
				</div>";

		$conteudoDireita[] = 
		"<div align='center'><img src='https://machadomatheus.github.io/Imagens/carrinho.png' height='123px'></div>";

		$layout = new layout();

		echo $layout->cabecalho($titulo);
		echo $layout->barra($links);
		echo $layout->corpo($conteudoEsquerda, $conteudoDireita);
		echo $layout->rodape();
	?>
</body>
</html>