<?php
session_start();


?>

<header class="cabecalho">
        <a href="index.php"><img alt="logo da impacta" src="img/logo4.png"></a>           
        <button class="btn-menu"><i class="fa fa-bars fa-lg " aria-hidden="true"></i></button>
        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>

            <ul>

                <?php
                    if(isset($_SESSION["newsession"])) {
                        $logado = $_SESSION["newsession"]
                        ?>
                            <li style="color: white;"> <?php echo "Bem vindo $logado";  ?></li>
                            <li><a href="listar_clientes.php">Clientes</a></li>
                            <li><a href="listar_orcamento.php">Orçamentos</a></li>
                            <li><a href="services/logoff.php">Sair</a></li>
                        <?php
                    }else{ ?>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="dicas.php">Dicas</a></li>
                        <li><a href="quem_somos.php">Quem Somos</a></li>
                        <li><a href="orcamento.php">Orçamento</a></li>
                        <li><a href="contato.php">Contato</a></li>
                        <?php
                    }
                ?>
            <ul>
        </nav>
</header>