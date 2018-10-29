<?php

session_start();


?>

<header class="cabecalho">
        <a href="index.php"><img alt="logo da impacta" src="img/logo4.png"></a>           
        <button class="btn-menu"><i class="fa fa-bars fa-lg " aria-hidden="true"></i></button>
        <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
            <ul >
                <li><a href="index.php">Home</a></li>
                <li><a href="dicas.php">Dicas</a></li>
                <li><a href="quem_somos.php">Quem Somos</a></li>
                <li><a href="agendar.php">Orçamento</a></li>
                <li><a href="contato.php">Contato</a></li>
                <?php
                    if(isset($_SESSION["newsession"])) {
                        ?>
                            <li><a href="logoff.php">Sair</a></li>
                        <?php
                    }
                ?>
            <ul>
        </nav>
</header>