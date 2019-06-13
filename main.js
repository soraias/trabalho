
<?php
if($_FILES['imagem']['name'] == imagem){
	echo "<script type='javascript'>alert('Este aluno já foi adicionado!');";
	echo "javascript:window.location='administrador.php';</script>";
}else{
	$_FILES['imagem']['name'] = .$_POST['nome'];				
	$caminho = 'imagens/'.$_FILES['imagem']['name'];
	move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);
	echo "<script type='javascript'>alert('Aluno adicionado com sucesso!!');";
	echo "javascript:window.location='administrador.php';</script>";
?>

	

