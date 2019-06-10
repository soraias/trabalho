<?php
if(isset($_POST) && $_POST["botao"] == "Entrar"){
  if($_POST["login"] == "professor" && $_POST["senha"] == "professor"){
		session_start();
		$_SESSION["nome"] = 'nome';
		header("location: professor.php");
/*	}else{
		header("location: sair.php");*/
	}

	else if($_POST["login"] == "admin" && $_POST["senha"] == "admin"){
		session_start();
		$_SESSION["nome"] = 'nome';
		header("location: administrador.php");
/*	}else{
		header("location: sair.php");
	}*/
}
}
/*}else{
	header("location: sair.php");
}*/
?>