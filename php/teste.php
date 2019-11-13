
<?php
	
	$method = $_SERVER["REQUEST_METHOD"];

	Print "$method";

	$post = $method == "POST";

	if ($post) {
		
	$nome = $_POST["nome"];
	$n1   = $_POST["n1"  ];
	$n2   = $_POST["n2"  ];

	$result = ($n1 + $n2) /2;

	}
?>


<!--Aqui começa o desenvolvimento em HTML-->


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<title>Teste</title>

</head>
<body>

	<h1>Sistema de Escolar</h1>

	<form method="POST" action="teste.php">
		
			<fieldset>
				<legend>Cálculo de Média do Aluno</legend>

				<label for="nome">Aluno: </label><br>
					<input type="text" name="nome" id="nome" placeholder="Digite o nome do aluno" required autofocus> <br><br>

				<label for="n1">Nota 1: </label><br>
				<input type="number" name="n1" id="n1" placeholder="Nº 1" required><br><br>
				
				<label for="n2">Nota 2: </label><br>
				<input type="number" name="n2" id="n2" placeholder="Nº 2" required><br><br>
				
				<input type="submit" value="Enter">
				<input type="reset"  value="Limpar"><br>


			</fieldset>

	</form>


<?php

	if ($post) {
		
	
	print "<form>
				<fieldset>
					<legend>Boletim do aluno</legend>

					<label>Nome do Aluno: $nome.</label><br>
					<label>Nota do 1º semestre: $n1</label><br>
					<label>Nota do 2º semestre: $n2</label><br>

					<label>Média do aluno: $result</label>
				</fieldset>

			</form>";
}
else {
	print "Seja bem vindo ao plex!";
}
?>


</body>
</html>