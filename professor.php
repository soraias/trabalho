<?php
session_start();
if(!isset($_SESSION["nome"])){
	header("location: sair.php");
}
?>

<html lang="en">
    <head>
        <title>Professor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="estilo.css" rel="stylesheet">
    </head>
    <body>
	<div id="container">
        	<form method='post' enctype='multipart/form-data'>
			<nav class='nav'>
				<a href="sair.php">Sair</a>
                	</nav>
			<div class = "radio">
                		<input type='radio' name='espelho' value='Sala'>Sala de Aula
                		<input type='radio' name='espelho' value='Lab'> Laboratório
			</div>
            		<button class='gerar'>Gerar espelho de classe<button>
               
		</form>		
                <footer class='footer'>
                    	<h4>Desenvolvido por Andressa, Luana e Soraia</h4>    
                </footer>
	</div>     
    </body>
</html>
