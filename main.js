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
