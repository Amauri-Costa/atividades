<?php 

//sistema de calculadora

$method = $_SERVER["REQUEST_METHOD"];

print "$method"; //para imprimir a forma como o usário acessou, se foi post ou direto get

$_ehPost = $method == "POST";


if ($_ehPost) {
	
	$n1   = $_POST["n1"];
	$n2   = $_POST["n2"];

	$soma = $n1 + $n2;
	$sub  = $n1 - $n2;
	$mult = $n1 * $n2;
	$div  = $n1 / $n2;

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>

<hr>
	<form method="POST" action="calculadora.php">
		<fieldset>
		<legend>Calculadora</legend>

		<label>Número 1: </label>
		  <input type="number" name="n1" placeholder="Digite um número" autofocus required><br><br>

        <label>Número 2: </label>
		  <input type="number" name="n2" placeholder="Digite um número" autofocus required><br><br>

		 <input type="submit" name="" value="Enter">
		 <input type="reset" name="" value="Limpar"><br><br>
        </fieldset>

	</form>


<hr>	
		
<h1>Calculadora</h1>

<h2>Resultados</h2>
<?php 

	if ($_ehPost) {
		
	
	print "Número 1 = $n1        <br>";
	print "Número 2 = $n2  		 <br>";
	print "<hr>"; 
	//
	print "a soma 		  = $soma  <br>";
	print "Subtração	  = $sub   <br>";
	print "Multiplicação  = $mult  <br>";
	print "Divisão        = $div   <br>";
	print "A raiz quadrada de é: ". sqrt($n1 + $n2);
	print "<br>O resultado de ABS é : ". abs($n1 - $n2); //retirando o valor absoluto onte há negativo

	print "<br>O valor do pow é: ". pow($n1, $n2);
	

	
	}
?>

</body>
</html>