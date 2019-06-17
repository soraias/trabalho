<?php
$partes = explode('.',$_FILES['imagem']['name']);
$ext = end($partes);
$imagem = $_POST['imagens']['name'].'.'.$ext;

while( false !== ($filename = readdir($diretorio))){
	if($filename != '.'&& $filename != '..'){
		if($_FILES['imagem']['name'] == $filename){
			echo "<script type='text/javascript'>alert('Este aluno já foi adicionado!');";
			echo "javascript:window.location='administrador.php';</script>";
		}else{
			$_FILES['imagem']['name'] = $_POST['nome'].'.'.$ext;				
			$caminho = 'imagens/'.$_FILES['imagem']['name'];
			move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);
			echo "<script type='text/javascript'>alert('Aluno adicionado com sucesso!!');";
			echo "javascript:window.location='administrador.php';</script>";
		}
	}
}
?>
