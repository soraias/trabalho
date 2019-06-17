<?php
session_start();
if(!isset($_SESSION["nome"])){
	header("location: sair.php");
}

$direcao = 'imagens/';
$diretorio = opendir($direcao);
$imagens = array();

while( false !== ($filename = readdir($diretorio))){
	if($filename != '.'&& $filename != '..'){
		array_push($imagens, $filename);
	}
}
if(isset($imagens) && count($imagens) == 0){
	echo "<script type='text/javascript'>alert('Nenhum aluno foi adicionado!');";
	echo "javascript:window.location='professor.php';</script>";
}else{
	shuffle($imagens);
		foreach($imagens as $imagem){
			echo '<img src='.$direcao.$imagem.'><br>';
		}
}
?>
