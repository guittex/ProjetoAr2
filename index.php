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
        <link rel="icon" href="img/.png">
    </head>

    <body>
        <?php
            include_once("menu.php");
        ?>
            
        <div class="banner">
            <div class="title">
                <h2>Nosso Objetivo!</h2>
                <h3>Proporcionar aos nossos clientes o fornecimento de profissionais qualificados 
                    para a execução de serviços de instalações e manutenções correntivas.</h3>
            </div>
            
            <div class="buttons">
                <a href="agendar.php"><button class="btn-cadastrar">Peça um orçamento<i class="fa fa-arrow-circle-right"></i></button></a>
                <a href="quem-somos.php"><button class="btn-sobre">Sobre nós<i class="fa fa-question-circle"></i></button></a>
            </div>
            </div>
            <main class="servicos">
                                
                <article class="servico">
                    <a href="dicas.php"><img src="img/manutencao.png" alt="Manutenção e Instalação"></a>
                    <div class="inner">
                        <a href="#">Manutenção  e Instalação</a>
                        <h4></h4>
                        <p> A Teen Ar Condicionado de forma a orientar nossos clientes listamos alguns conceitos os quais seguimos de forma rígida de acordo com nossos padrões de serviços.
                            O condicionamento de ar, qualquer que seja a finalidade a que se destine, implica preliminarmente a limitação entre os seguintes valores 
                            preestabelecidos das grandezas discriminadas, representativos das condições que devem coexistir nos recintos, no período de tempo em que 
                            se considera a aplicação do processo:  temperatura do ar no termômetro de bulbo seco; umidade relativa do ar;  movimentação do ar;  grau
                            de pureza do ar; nível de ruído admissível; porcentagem ou volume de renovação de ar.
                            Dentre as atividades desenvolvidas pelo mantenedor de um sistema de climatização, algumas requerem uma atenção especial, as quais seguem:
                            Cortar tubos, Dobrar tubos ,Expandir tubos,Flangear tubos ,Soldar tubos Testar vazamento com nitrogênio ,Testar vazamento com detetor ,Evacuar
                            e desidratar sistema ,Carregar o sistema de gás , Manutenção de: filtro de ar, correia, ventiladores e mancais, condensadores, evaporadores, motores
                            elétricos, circuitos elétricos, gabinetes, pressostatos, visor de líquido, etc.</p>
                    </div>
                </article>
                
                <article class="servico">
                    <a href="dicas.php"><img src="img/limpeza.jpg" alt="Limpeza e Higienização"></a>
                    <div class="inner">
                        <a href="#">Limpeza e Higienização</a>
                        <h4></h4>
                        <p>A Teen Ar Condicionado cuida preventivamente e realiza as atividades de limpeza e Higienização de seu equipamento, assim lhe proporcionado,
                        melhor conforto e ar sem impurezas. Dessa forma explicamos um pouco a respeito.
                        Os filtros de ar devem ser inspecionados e limpos mensalmente, no mínimo. Dependendo do local da instalação,
                        o filtro deverá ser limpo semanalmente. Os filtros permanentes e laváveis fornecidos com o condicionador de ar,
                        podem ser limpos com solução de água fria e detergente. O filtro deve ser escovado dentro da solução, enxaguado em
                        água fria e soprado com jato de ar comprimido.A tensão, estado de conservação e alinhamento das correias, devem ser verificados mensalmente.
                        Para verificação do ajuste, a correia deve ser comprimida com o polegar e apresentar uma flecha de + 10 mm.
                        O rotor e a voluta do ventilador centrífugo devem ser limpos quinzenalmente. Os parafusos de fixação da voluta e os parafusos de fixação
                        dos mancais e polias devem ser verificados e reapertados quando necessário. Os mancais dos ventiladores são auto alinhantes e não requerem manutenção especial,
                        devem ser trocados quando apresentarem ruído.O condensador “Shell and Tube” raramente requer manutenção. Pode-se determinar a necessidade da limpeza, observando
                        a pressão de funcionamento, 220 psig com água entrando a 28ºC e saindo a 38ºC. É necessário desmontar as tampas e efetuar limpeza com escova cilíndrica quando a 
                        pressão aumentar de 10 a 20 psig nas condições normais de funcionamento. O período de manutenção do condensador será prolongado efetuando-se limpeza mensal na torre de arrefecimento.</p>
                    </div>
                </article>
                
                <article class="servico">
                    <a href="dicas.php"><img src="img/compra.png" alt="Compra e Venda"></a>
                    <div class="inner">
                        <a href="#">Compra e Venda</a>
                        <h4></h4>
                        <p>A Teen Ar Condicionado também faz a venda de todos os produtos oriundos da refrigeração
                         e ar condicionado, vendemos e possuímos as melhores marcas que hoje estão disponíveis. 
                         Equipamentos de todos os tipos e todos os modelos.</p>
                    </div>
                </article>
            
            </main>
            <!---NEWLETTER-->
            <section class="newsletter">
                <h2>Agende uma visita agora</h2>
                <h3>Orçamento totalmente gratuito</h3>
                <a href="agendar.php"><button>Agendar</button></a>
                
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
