﻿<!DOCTYPE html>
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

<body class="fundo2"> 
        <?php
            include_once("menu.php");
        ?>
            


	<div class="quemsomos">
		<h1>Quem somos</h1>
			<p>O que nós acreditamos
			na Teen Ar condicinado ser a melhor loja de suplementos alimentares, com os melhores produtos,
			serviços e atendimento a seus clientes.Buscar a satisfação total de nossos clientes, garantindo 
			atendimento com excelência profissional e técnica,
			fornecendo os melhores produtos disponíveis no mercado, aplicar preços justos.</p>

	
	
		<h1>Visão</h1>
			<p>Agilidade: Fazer  entregas rápidos, prezando sempre pela qualidade valorizando cada vez mais nosso cliente.
			Revolução: Ser o primeiro a disponibilizar lançamentos e novidades. Assumir um compromisso de inovação.
			Responsabilidade: Possuir as principais marcas do mercado, sendo todas certificados pela ANVISA juntamente
			ao Ministério da Saúde, garantido a total procedência e qualidade dos nossos produtos, as vendas são
			são realizadas com emissão de nota fiscal, garantindo assim a procendência de todos produtos.
			Atendimento de Qualidade:Garantir que o atendimento aos nossos clientes, mesmo no site para compras eletrônicas, seja
			do mais alto padrão, oferecendo nosso contato por telefone, e-mail, whatsapp, prestando todo e qualquer  esclarecimento 
			solicitado pelo cliente.</p>

			<h1>Nossos Valores</h1>
			<p>O que nós acreditamos
			na GetFit ser a melhor loja de suplementos alimentares, com os melhores produtos, 
			serviços e atendimento a seus clientes.Buscar a satisfação total de nossos clientes, garantindo 
			atendimento com excelência profissional e técnica,
			fornecendo os melhores produtos disponíveis no mercado, aplicar preços justos.</p>
	</div>

		   <section class="newsletter">
                <h2>Agende uma visita agora</h2>
                <h3>Orçamento totalmente gratuito</h3>
                <a href="orcamento.php"><button>Agendar</button></a>
            </section>
            
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