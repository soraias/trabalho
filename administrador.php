<?php
session_start();
if(!isset($_SESSION["nome"])){
	header("location: sair.php");
}
?>

<html lang="en">
    <head>
        <title>Administrador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>
		<div id="container">
        	<form class="form">
				<header class='header'>
                    
				</header>
				<nav class='nav'>
					<a href="sair.php">Sair</a>
				</nav>
				<section class='section'>
					<h4>Adicionar aluno:<h4>
					<label for='nome'>Nome:<label>
					<input type='text' name='nome' id='nome'>
					<label for='imagem'>Imagem: <label>
					<input type='file' name='imagem' id='imagem'>
					<button class='botao'>Adicionar<button>
					</section>
				<footer class='footer'>
					<h4>Desenvolvido por Andressa, Luana e Soraia</h4>    
				</footer>
			</form>
		</div> 
    </body>
	<script type='text/javascript'>
		let botao = document.queryselector('.botao');
		let imagens = [];
		<?php mkdir($_POST['imagens']);?>
	
		botao.addeventlistener('click', function(e){
			<?php
				$_FILES['imagem']['name'] = .$_POST['nome'];				
				$caminho = 'imagens/'.$_FILES['imagem']['name'];
				move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);		
			?>
			imagens.push(<?php $_FILES['imagem']?>);	
		});
	</script>
						
</html>
