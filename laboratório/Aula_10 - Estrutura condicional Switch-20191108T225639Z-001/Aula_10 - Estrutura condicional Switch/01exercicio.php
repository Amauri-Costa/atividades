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
	
	// Ler um número e qual operação realizar: dobro, cubo ou raiz quadrada. <br/>
	
	<?php 
		$n = isset ($_GET ["num" ])? $_GET ["num" ]: 0;
		$o = isset ($_GET ["oper"])? $_GET ["oper"]: 1;
		
		switch ($o) {
			case 1:
				$r = $n * 2;
				break;
			
			case 2: 
				$r = $n ^ 3;
				break;
			case 3: 
				$r = sqrt($n);
		}
		echo "o resultado da operação solicitada foi $r";
		
	?>
	<br/>
	<a href="01exercicio.html">Voltar</a>
	
	
		
</form>
</table>

<br/>

<hr/>


</div>
</body>
</html> 