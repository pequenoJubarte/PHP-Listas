<!DOCTYPE html>
<html>
<head>
	<title>Paletas de Cores</title>
	<link rel='stylesheet' type='text/css' href='paleta.css?version=12'>
	<link href='https://fonts.googleapis.com/css?family=Acme|Indie+Flower&display=swap' rel='stylesheet'>
</head>
<body>
	<script type='text/javascript'>
		function copy(id) {
			/* Get the text field */
			var copyText = document.getElementById(id);

			/* Select the text field */
			copyText.select();

			/* Copy the text inside the text field */
			document.execCommand('copy');
		} 
	</script>	
	<div class='cabecalho'>Paletas</div>
	<?php  
	include 'funcoes.php';
	$funcoes = new funcoes();

	$paletaEeImagem['https://MachadoMatheus.github.io/Imagens/LogosByNick/summer-color-palette-hex-600x600.png'] = ('#F3A001, #CCCCF4, #0077C5, #313853');

	$paletaEeImagem['https://MachadoMatheus.github.io/Imagens/LogosByNick/tropical-bird-color-palette-600x600.png'] = ('#4F2D20, #FF9D1E, #019FD3, #BEE600');

	$funcoes->paletaComImagem($paletaEeImagem);
	
	?>

	<div style="background-image: linear-gradient(#F3A001, #CCCCF4, #0077C5, #313853); width: 50%; height: 350px;">
	</div>
</body>
</html>