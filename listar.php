<?php
include_once("conexao.php");



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
<body>

        <?php
            include_once("menu.php");

            if (!isset($_SESSION["newsession"])){
                echo("Não autorizado");
                header('Location: nao_autorizado.php');   
                 
            }
        ?>
            

        
        <h1 class="titulo-obrigado">Listagem de Usuário</h1>

        <div class="C-base">
        
        
        <?php
        $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
        $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

        $quantidade_pagina = 4;

        $inicio = ($quantidade_pagina * $pagina) - $quantidade_pagina;  

        $result_clientes = "SELECT * FROM agendar_clientes LIMIT $inicio,$quantidade_pagina";
        $resultado_clientes = mysqli_query($con, $result_clientes);
        echo "<table id='tabela_listar'>";
        while($row_clientes = mysqli_fetch_assoc($resultado_clientes)){
            echo "<tr>";         
            echo "<td>" . $row_clientes['nome'] . "</td>";
            echo "<td>" . $row_clientes['email'] . "</td>";
            echo "<td>: " . $row_clientes['telefone'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        
        $result_pg = "SELECT COUNT(id) AS num_result FROM agendar_clientes";
        $resultado_pg = mysqli_query($con, $result_pg); 
        $row_pag = mysqli_fetch_assoc($resultado_pg);
        //echo $row_pag['num_result']
        $qtd_pg = ceil($row_pag['num_result'] / $quantidade_pagina);
        
        $max_link = 2;
        echo "<a href=listar.php?pagina=1 style='color:blue; margin-right: 8px;'>Primeira </a>";
        
        for($pag_ant = $pagina - $max_link; $pag_ant <= $pagina - 1; $pag_ant ++){
            if($pag_ant >= 1){
                echo "<a href=listar.php?pagina=$pag_ant style='color:blue;'>$pag_ant </a>";
            }
        }
        echo "$pagina";
        

        for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_link; $pag_dep++){
            if($pag_dep <= $qtd_pg){
                echo "<a href=listar.php?pagina=$pag_dep style='color:blue;'>$pag_dep </a>";

            }
        }


        echo "<a href=listar.php?pagina=$qtd_pg style='color:blue; margin-left: 8px;'>Última </a>";
    
        ?>          

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