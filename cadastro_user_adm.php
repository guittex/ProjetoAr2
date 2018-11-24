<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viweport" content="width=device-width, initial-scale=1">
    <title>Teen Ar Condicionado</title>
    <meta name="description" content="Agência especializada em marketing Digital.">
    <meta name="keywords" content="Agência Digital, Marketing, Sites">
    <meta name="robots" content="index, follow">
    <meta name="author" content=" Douglas Nardotto">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
    <link rel="icon" href="img/.png">
</head>
<body class='fundo'>
        <?php
            include_once("menu.php");
        ?>
            
	
	<h1 class="titulo-obrigado">Cadastro de Administrador</h1>
	<div class="C-base">
		    
        <form method="POST" action="services/cadastro_adm.php">

            <p><label for="nome">Login:</label>
                <input type="text" name="nome" id="nome"  placeholder="Digite seu login"/></p>

            <p><label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder=" Digite o seu e-mail"/></p>

            <p><label for="telefone">Senha:</label>
                <input type="password" name="senha" id="senha"  placeholder="Digite sua senha"/></p>

            
            <input class="btn-C" type="submit" value="Enviar">

        </form>

    </div>
            <!---Rodapé-->
            <?php
                include_once("footer.php");
            ?>
			<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        	<script>
            	$(".btn-menu").click(function(){
                	$(".menu").show();
            	});

            	$(".btn-close").click(function(){
                	$(".menu").hide();
            	});
        </script>
</body>
</html>