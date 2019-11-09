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
		Permitir personalizaç~~ao de um texto atravé de um formulário.

<br/>
<br/>
<table>
<fieldset class="field">
	<legend>Integrando Formulário em PHP</legend>
	
	<?php 
		$d = isset ($_GET ["ds"])? $_GET ["ds"]: 0;
		switch ($d){
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
		
		echo "Levanta e vai estudar! :)";
		break;
			case 7:
			case 8:
		echo "Descanse, pequeno gafanhoto! :)";
		break;
		default:
			echo "Dia da semana inválido";
		}
	?>
	<br/>
	<a href="02exercicio.html">Voltar</a>
	
	
		
</form>
</table>

<br/>

<hr/>


</div>
</body>
</html> 