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
        <link rel="icon" href="img/.png">
    </head>
<body class='fundo'>
 <header class="cabecalho">
 <a href="index.html"><img alt="logo da impacta" src="img/logo4.png"></a>    
            
            <button class="btn-menu"><i class="fa fa-bars fa-lg " aria-hidden="true"></i></button>
            <nav class="menu">
                <a class="btn-close"><i class="fa fa-times"></i></a>
                <ul>
                   <li><a href="index.html">Home</a></li>
                   <li><a href="login.html">Login</a></li>
                   <li><a href="dicas.html">Dicas</a></li>
                   <li><a href="quem-somos.html">Quem Somos</a></li>
                   <li><a href="agendar.php">Orçamento</a></li>
                   <li><a href="contato.html">Contato</a></li>
                <ul>
            </nav>

        </header>
	
	<h1 class="titulo-obrigado">Solicitação de Orçamento</h1>
	<div class="C-base">
		    
        <form method="POST" action="recebe.php">

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
            <!---Rodapé-->
            <footer class="rodape">
                <div class="social-icon">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                </div>
                <p class="copyright">Copyright Teen Ar Condicionado 2018. Todos os direitos reservados.</p>
                <p class="foot-nos"><a href="quem-somos.html">Sobre Nós</a></p>
                <p class="foot-dicas"><a href="dicas.html">Dicas</a></p>
                <p class="foot-orçamento"><a href="agendar.php">Orçamento</a></p>  
                <p class="foot-contato"><a href="contato.html">Contato</a></p>
                <p class="foot-index"><a href="index.html">Home</a></p>   
            </footer>
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