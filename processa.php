<script type='text/javascript'>

var botao = document.queryselector('.botao');

botao.addeventlistener('click', function(e){
	e.preventdefault();
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
?>;
});
</script>
<?php
$direcao = 'imagens/';
$diretorio = opendir($direcao);
$imagens = array();

while( false !== ($filename = readdir($diretorio))){
	array_push($imagens, $filename);
}

function gerar(){
	shuffle($imagens);
	foreach($imagens as $imagem){
		echo $imagem;
	}
}
?>
<script type='text/javascript'>
	let gerar = document.queryselector('.gerar');
	
	gerar.addeventlistener('click', funtion(e) {
		e.preventdefault();
		var print = <?php gerar(); ?>;
		print.print();
		
</script>
