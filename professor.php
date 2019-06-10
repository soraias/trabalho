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
		<button class='gerar'>Gerar espelho de classe<button>
		<a href="sair.php">Sair</a>
		</form>
	</body>
</html>
