<?php
if(isset($_POST) && $_POST["botao"] == "Gerar"){
	$espelho = $_POST['espelho'];
	if($espelho == 1){
		session_start();
		$_SESSION["nome"] = 'nome';
		header("location: sala.php");
	}else if($espelho == 2){
		session_start();
		$_SESSION["nome"] = 'nome';
		header("location: laboratorio.php");
	}
}
?>
