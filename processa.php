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

/*<script type='text/javascript'>
	var gerar = document.queryselector('.gerar');
	var opcao = documento.queryselector('input[name=espelho]:checked').value;
	gerar.addeventlistener('click', funtion(e) {
		e.preventdefault();
		if(opcao == 1){
			var print = <?php gerar(); ?>;
			print.print();
		}else if(opcao == 2){
			var print = <?php gerar(); ?>;
			print.print();
		}
		
</script>*/
