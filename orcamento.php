<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viweport" content="width=device-width, initial-scale=1">
        <title>Teen Ar Condicionado</title>
        <meta name="description" content="Oficina especializada em manutenções de ar condicionados.">
        <meta name="keywords" content="Manutenção, Compra e Venda">
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
            
	
	<h1 class="titulo-obrigado">Solicitação de Orçamento</h1>
	<div class="C-base">
		    
        <form method="POST" action="services/cadastro_orcamento.php">

            <p><label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome"  placeholder="Digite seu Nome"/></p>

            <p><label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder=" Digite o seu e-mail"/></p>

            <p><label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone"  placeholder="Digite seu nº de telefone ou celular"/></p>

            <p><label for="cidade">Cidade:</label>
                <input type="cidade" name="cidade" id="cidade" placeholder=" Digite o sua cidade"/></p>   
            
            <p><label for="mensagem">Mensagem:</label>
                <textarea name="mensagem" id="mensagem"  placeholder="Digite uma breve mensagem"></textarea></p>

            <input class="btn-C" type="submit" value="Enviar">

        </form>

    </div>
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