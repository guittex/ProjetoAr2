<?php
include_once("services/conexao.php");

?>


<!DOCTYPE html>
<html lang="pt-br">
<?php
include_once("header.php");


?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<body>

<?php
include_once("menu.php");

if (!isset($_SESSION["newsession"])){
    echo("Não autorizado");
    header('Location: nao_autorizado.php');

}
?>



<h1 class="titulo-obrigado">Listagem de Clientes</h1>

<div class="C-base">


    <?php
    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

    $quantidade_pagina = 5;

    $inicio = ($quantidade_pagina * $pagina) - $quantidade_pagina;

    $result_clientes = "SELECT * FROM cliente LIMIT $inicio,$quantidade_pagina";
    $resultado_clientes = mysqli_query($con, $result_clientes);
    echo "<table id='tabela_listar_clientes'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th class=text-center>Nome</th>";
    echo "<th class=text-center>E-mail</th>";
    echo "<th class=text-center>Telefone</th>";
    echo "<th class=text-center>Celular</th>";
    echo "<th class=text-center>Cidade</th>";
    echo "<th class=text-center>Endereço</th>";
    echo "<th class=text-center>Número</th>";
    echo "<th class=text-center>Observação</th>";

    echo "</tr>";
    echo "</thead>";

    while($row_clientes = mysqli_fetch_assoc($resultado_clientes)){
        echo "<tbody>";
        echo "<tr>";
        echo "<td>" . $row_clientes['nome'] . "</td>";
        echo "<td>" . $row_clientes['email'] . "</td>";
        echo "<td>" . $row_clientes['telefone'] . "</td>";
        echo "<td>" . $row_clientes['celular'] . "</td>";
        echo "<td>" . $row_clientes['cidade'] . "</td>";
        echo "<td>" . $row_clientes['endereco'] . "</td>";
        echo "<td>" . $row_clientes['numero'] . "</td>";
        echo "<td>" . $row_clientes['observacao'] . "</td>";
        echo "<td> <a href=cadastro_clientes.php><img src='img/criar.png'</td>";
        echo "<td> <a href=editar_cliente.php?id=" . $row_clientes['id'] .   "</a><img src='img/editar.png'></td>";
        echo "<td> <a href=services/apagar_cliente_banco.php?id=" . $row_clientes['id'] .   " data-confirm='Tem certeza de que deseja excluir o item selecionado?'</a><img src='img/deletar.png'></td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";

    $result_pg = "SELECT COUNT(id) AS num_result FROM cliente";
    $resultado_pg = mysqli_query($con, $result_pg);
    $row_pag = mysqli_fetch_assoc($resultado_pg);
    //echo $row_pag['num_result']
    $qtd_pg = ceil($row_pag['num_result'] / $quantidade_pagina);

    $max_link = 2;
    echo "<div style='margin: 0 auto; font-size:17px'>";

    echo "<a href=listar_clientes.php?pagina=1 style='color:blue; margin-right: 8px ;'>Primeira </a>";


    for($pag_ant = $pagina - $max_link; $pag_ant <= $pagina - 1; $pag_ant ++){
        if($pag_ant >= 1){
            echo "<a href=listar_clientes.php?pagina=$pag_ant style='color:blue;'>$pag_ant </a>";
        }
    }
    echo "$pagina";


    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_link; $pag_dep++){
        if($pag_dep <= $qtd_pg){
            echo "<a href=listar_clientes.php?pagina=$pag_dep style='color:blue;'>$pag_dep </a>";

        }
    }


    echo "<a href=listar_orcamento.php?pagina=$qtd_pg style='color:blue; margin-left: 8px;'>Última </a>";
    echo "</div>";

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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/modal_apagar.js"></script>
</body>
</html>