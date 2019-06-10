<?php
session_start();
if(!isset($_SESSION["nome"])){
	header("location: sair.php");
}
?>
<html>
	<head>
		<title>Administrador</title>
	</head>
	<body>
		<form class='form1'>
		<h4>Adicionar aluno:</h4>
		<label for='nome'>Nome: </label>
		<input type='text' name='nome' id='nome'>
		<label for='imagem'>Imagem: </label>
		<input type= 'file' name='imagem' id='imagem'>
		<button class='botao'>Adicionar</button>
		</form>
		<a href="sair.php">Sair</a>
	</body>
</html>
