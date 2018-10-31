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

<body>
        <?php
        include_once("menu.php");
        ?>
        
	
    <h1 class="titulo-contato">Nome: Guilherme Felipe</h1></br>
    <h1 class="titulo-contato">Whats-App: (11)9999-66352</h1></br>
    <h1 class="titulo-contato">E-mail: ilherme@gmail.com</h1></br>
    <h1 class="titulo-contato">Disponibilidade: A consultar</h1></br>
    <img class="img-contato" src="img/manutencao.png" alt="Manutenção e Instalação">
	
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