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
<body class="fundo3">
        <?php
            include_once("menu.php");
        ?>
            
	
	<h1 class="titulo-obrigado">Entrar</h1>
	<div class="C-base">
		    
            <form method="POST" action="services/login_adm_banco.php">
	            <label>Login:</label><input type="text" name="nome" id="nome"></br>
	            <label>Senha:</label><input type="password" name="senha" id="senha">
	            <input class="btn-C" type="submit" name="enviar" placeholder="Seu Cadastro">
	            
            </form>
            <?php
                if(!empty($_GET['error'])){
                    if($_GET['error'] == 1){
                        ?>
                            <h1 style="color: red">USUÁRIO OU SENHA ESTÃO INCORRETAS!! </h1>
                        <?php
                    }
                }
            ?>
    </div>
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