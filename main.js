
<?php
if($_FILES['imagem']['name'] == imagem){
	echo "<script type='text/javascript'>alert('Este aluno já foi adicionado!');";
	echo "javascript:window.location='administrador.php';</script>";
}else{
	$_FILES['imagem']['name'] = .$_POST['nome'];				
	$caminho = 'imagens/'.$_FILES['imagem']['name'];
	move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);
	echo "<script type='text/javascript'>alert('Aluno adicionado com sucesso!!');";
	echo "javascript:window.location='administrador.php';</script>";
}
$direcao = 'imagens/';
$diretorio = opendir($direcao);
$imagens = array();

while( false !== ($filename = readdir($diretorio))){
	array_push($imagens, $filename);
}
?>
<scripttype='text/javascript'>
let imagens = new Array();

</script>
