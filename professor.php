<?php
session_start();
if(!isset($_SESSION["nome"])){
	header("location: sair.php");
}
?>
<html>
	<head>
		<title>Professor</title>
	</head>
	<body>
		<form>
		<h4> Gerar Espelho de Classe </h4>
		<button class='gerar_sala'>Sala de Aula</button>
		<button class='gerar_lab'>Laboratório</button>
		<a href="sair.php">Sair</a>
		</form>
	</body>
</html>
