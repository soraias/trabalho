		let botao = document.queryselector('.botao');
		let imagens = [];
		<?php mkdir($_POST['imagens']);?>
	
		botao.addeventlistener('click', function(e){
			foreach(imagens as imagem){
				if(<?php $_FILES['imagem']['name']?> == imagem){
					alert("Este aluno já foi adicionado!");
				}else{
					<?php
						$_FILES['imagem']['name'] = .$_POST['nome'];				
						$caminho = 'imagens/'.$_FILES['imagem']['name'];
						move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);		
					?>
					imagens.push(<?php $_FILES['imagem']?>);	
				}
			}
		});
		
