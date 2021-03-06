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

    <body>
            <?php
            include_once("menu.php");
            ?>
            
        <div class="">
                <div class="titledicas">
                    <h2>DICAS E INFORMAÇÕES</h2>
                </div>
            
            <main class="servicos">
                <article class="servico">
                    <a href="#"><img src="img/instala.png" alt="Bactérias no ar condicionado."></a>
                    <div class="inner">
                        <a href="#">Limpeza regurlamente é preciso!</a>
                        <h4></h4>
                        <p>No calor forte, o ar-condicionado é quase sempre a 
                        única saída para refrescar o tempo quente. Mas a situação
                        preocupa quando o assunto é a limpeza desses aparelhos. 
                        Escondendo verdadeiras fontes de contaminação, os equipamentos
                        podem desencadear diversas doenças respiratórias, se não forem 
                        limpos corretamente e com frequência.</p>
                    </div>
                </article>
                 <article class="servico">
                    <a href="#"><img src="img/bact.jpg" alt="Bactéria Legionella Pneumophyla"></a>
                    <div class="inner">
                        <a href="#"> Bactéria Legionella Pneumophyla</a>
                        <h4></h4>
                        <p>Uma doença desconhecida por muitos, mas que pode levar à morte. Esta é a legionelose, uma patologia provocada pela bactéria Legionella pneumophyla que, quando aspirada, pode alojar-se nos alvéolos pulmonares, provocando uma pneumonia severa.
                        Os primeiros sintomas são dores de cabeça, muscular e febre alta, que podem evoluir para tosse, falta de ar e dores no peito. A doença é curável, desde que diagnosticada a tempo, e o tratamento é feito com antibióticos. Pessoas com sistema imunológico comprometido, doenças respiratórias ou problemas cardíacos – especialmente idosas – são as mais propensas ao contágio. 
                        A bactéria sobrevive em locais com água, principalmente morna, como sistemas de ar condicionado, banheiras, piscinas, chuveiros, nebulizadores e sistemas de água.</p>
                    </div>
                </article>
                 <article class="servico">
                    <a href="#"><img src="img/dicas.jpg" alt="Dicas"></a>
                    <div class="inner">
                        <a href="#">Dicas</a>
                        <ol class="dicas">
                            <p><li>Proibir o fumo em ambiente climatizado fechado;</li>
                            <li>Melhorar a renovação do ar. Para isso, basta deixar frestas nas janelas para entrada de ar no ambiente. Este simples procedimento melhora a qualidade do ar e evita a proliferação de doenças no ambiente;</li>
                            <li>Deixar copiadoras e impressoras a laser de grande porte em um lugar separado e com sistema de exaustão exclusivo;</li>
                            <li>Melhorar os procedimentos de limpeza. É recomendado não varrer superfícies fixas. A melhor solução é aspirar carpetes e promover a limpeza dos ambientes com produtos anti-bactericidas;</li>
                            <li>Evitar vasos com plantas em excesso, que podem trazer problemas. Plantas e terra úmida favorecem a infestação de microrganismo no ambiente;</li>
                            <li>Não utilizar ar-condicionado em obras e reformas. É imprescindível isolar o aparelho com plástico para evitar sua contaminação;</li>
                            <li>Corrigir vazamentos e infiltrações de água. Focos de umidade contribuem para a proliferação de microrganismo;</li>
                            <li>Limpar e higienizar o sistema de ar-condicionado pelo menos uma vez por mês.</li>
                            <li>Saúde – É inegável que o ar-condicionado climatiza, evita malefícios e deixa o ambiente mais agradável, mas também pode ser o principal motivo para algumas doenças. As pessoas sensíveis têm alergia, coceira na pele, sinusite, bronquite, asma e irritação nos olhos. Segundo Ciro Kirchenchtejn, pneumologista da Unifesp, os ambientes climatizados se tornam mais secos.</p>
                        </ol>
                    </div>
                </article>
            </main>
            <!---NEWLETTER-->
            <section class="newsletter">
                    <h2>Agende uma visita agora</h2>
                    <h3>Orçamento totalmente gratuito</h3>
                    <a href="orcamento.php"><button>Agendar</button></a>
            </section>
            
            <?php
                include_once("footer.php");
            ?>

            <!---JS-->
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
