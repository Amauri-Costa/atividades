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
	
		
		
		$est = ($_GET ["rg"])?$_GET ["rg"]:"O usuário não entrou com o valor válido";
		
		switch ($est){
			case "Acre":
					
				echo "A região do estado do $est é Norte!";
			break;
			
			case "Amapá":

				echo "A região do estado do $est é Norte!";
			break;			
				
			case "Amazonas":
			
				echo "A região do estado do $est é Norte!";
			break;
			
			case "Rondônia":
			
				echo "A região do estado do $est é Norte!";
			break;
			
			case "Roraima":
			
				echo "A região do estado do $est é Norte!";
			break;
			
			case "Pará":
			
				echo "A região do estado do $est é Norte!";
			break;
			
			case "Tocantins":
			
				echo "A região do estado do $est é Norte!";
			break;
			
			case "Mato Grosso":
			
				echo "A região do estado do $est é Centro-Oeste!";
			break;
			
			case "Mato Grosso do Sul":
			
				echo "A região do estado do $est é Centro-Oeste!";
			break;
			
			case "Goiás":
			
				echo "A região do estado do $est é Centro-Oeste!";
			break;
			
			case "Distrito Federal":
			
				echo "A região do estado do $est é Centro-Oeste!";
			break;
			
			case "Maranhão":
			
				echo "A região do estado do $est é Nordeste!";
			break;
			
			case "Piauí":
			
				echo "A região do estado do $est é Nordeste!";
			break;
			
			case "Ceará":
			
				echo "A região do estado do $est é Nordeste!";
			break;
			
			case "Rio Grande do Norte":
			
				echo "A região do estado do $est é Nordeste!";
			break;
			
			case "Paraíba":
			
				echo "A região do estado do $est é Nordeste!";
			break;
			
			case "Recife":
			
				echo "A região do estado do $est é Nordeste!";
			break;
			
			case "Alagoas":
			
				echo "A região do estado do $est é Nordeste!";
			break;
			
			case "Sergipe":
			
				echo "A região do estado do $est é Nordeste!";
			break;
			
			case "Bahia":
			
				echo "A região do estado do $est é Nordeste!";
			break;
			
			case "Espírito Santo":
			
				echo "A região do estado do $est é Sudeste!";
			break;
			
			case "Minas Gerais":
			
				echo "A região do estado do $est é Sudeste!";
			break;
			
			case "Rio de Janeiro":
			
				echo "A região do estado do $est é Sudeste!";
			break;
			
			case "São Paulo":
			
				echo "A região do estado do $est é Sudeste!";
			break;
			
			case "Paraná":
			
				echo "A região do estado do $est é Sul!";
			break;
			
			case "Santa Catarina":
			
				echo "A região do estado do $est é Sul!";
			break;
			
			case "Rio Grande do Sul":
			
				echo "A região do estado do $est é Sul!";
			break;
			
			
			
			
			
			
			default: echo "O usuário não entrou com um valor válido!";
		}
	?>
	<br/>
	<a href="04exercicio.html">Voltar</a>
	
	
		
</form>
</table>

<br/>

<hr/>


</div>
</body>
</html> 