<DOCTYPE html>

<html lang="pt-br">
<head>
	<title>aulaphp</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css"/>
</head>

<body>
<div id="topo">

LOGO

</div>



<div id="faixa_superior">




	<h1>AC BRITO COMANDOS TECNOLOGY<br/>Custumer Service &copy</h1>
	

</div>

<div id="php_corpo">

		// Exercício 03
		Permitir personalização de um texto atravé de um formulário.

<br/>
<br/>
<table>
<fieldset class="field">
	<legend>Integrando Formulário em PHP</legend>
	
	<?php 
	
		$est = isset($_GET ["rg"])?$_GET ["rg"]:"estado não encontrado";
			
			
			echo "A região do estado do  $est";
			
		
	?>
	<br/>
	<a href="03exercicio.html">Voltar</a>
	
	
		
</form>
</table>

<br/>

<hr/>


</div>
</body>
</html> 