<?php
include_once("services/conexao.php");

$pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);

$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

$quantidade_pagina = 4;

$inicio = ($quantidade_pagina * $pagina) - $quantidade_pagina;

$result_orcamento = "SELECT * FROM agendar_clientes LIMIT $inicio,$quantidade_pagina";

$resultado_orcamento = mysqli_query($con, $result_orcamento);
?>


<!DOCTYPE html>
<html lang="pt-br">
<?php
include_once("header.php");

?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<body style="font-size: 24px;">

<?php
include_once("menu.php");

if (!isset($_SESSION["newsession"])){
    echo("Não autorizado");
    header('Location: nao_autorizado.php');

}
?>



<div class="container theme-showcase" role="main">

    <!--TITULO LISTAR ORCAMENTO-->
    <div class="page-header">
        <h1 style="text-align: center;">Listar Orçamentos</h1>
    </div>

    <!--Pesquisar orçamento-->
    <div class="row" style="display: inherit; margin-top: 80px" ">

        <div class="col-lg-12" style="margin: 30px 0px 30px;">

            <form method="POST">
                <label style="font-size: 20px;">Nome:</label>
                <input type="text" name="nome" placeholder="Digite um nome para pesquisar" style="padding: 0%; width: 33%;">
                <button name="SendPesqUser" id="SendPesqUser" class="btn btn-xs btn-dark"  value="Pesquisar"> Pesquisar</button>
            </form>


        </div>
    </div>


    <!--Tabela listar orcamento-->
    <div class="row" id="tabela_listar_orcamento" STYLE="display: inherit;">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Ação</th>
                </tr>
                </thead>



                <tbody>

                    <?php
                    $SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
                    if($SendPesqUser){
                        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
                        $result_usuario = "SELECT * FROM agendar_clientes WHERE nome LIKE '%$nome%'";
                        $resultado_usuario = mysqli_query($con, $result_usuario);
                        while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
                            echo "<tr>";
                            echo "<td>" . $row_usuario['nome'] . "</td>";
                            echo "<td>" . $row_usuario['telefone'] . "</td>";
                            echo "<td>";
                            echo "<button type=button class='btn btn-xs btn-primary' data-toggle=modal data-target='#myModal" . $row_usuario["id"] . "'>Visualizar</button>";
                            echo "<button type=button class='btn btn-xs btn-danger' style='margin-left: 5px'> <a href=services/apagar_orcamento_banco.php?id=" . $row_usuario['id'] . "  data-confirm='Tem certeza de que deseja excluir o item selecionado?' style='color: inherit'</a> Apagar</button>";
                            echo "</td>";
                            echo "</tr>";
                        }

                    }

                    ?>
                <?php while($rows_orcamento = mysqli_fetch_assoc($resultado_orcamento)){ ?>

                <tr>
                    <?php

                    if(!$SendPesqUser){
                       echo "<td>" . $rows_orcamento['nome'] . "</td>";
                       echo "<td>" . $rows_orcamento['telefone'] . "</td>";
                       echo "<td>";
                       echo "<button type=button class='btn btn-xs btn-primary' data-toggle=modal data-target='#myModal" . $rows_orcamento["id"] . "'>Visualizar</button>";
                       echo "<button type=button class='btn btn-xs btn-danger' style='margin-left: 5px;'> <a href=services/apagar_orcamento_banco.php?id=" . $rows_orcamento['id'] . "  data-confirm='Tem certeza de que deseja excluir o item selecionado?' style='color: inherit;'</a> Apagar</button>";
                       echo "</td>";

                    }
                    ?>
                </tr>

                    <!-- Inicio Modal VISUALIZAR -->
                    <div class="modal fade" id="myModal<?php echo $rows_orcamento['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel" style="text-align: center;"><?php echo $rows_orcamento['nome']; ?></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <p><b style="font-weight: bold">Nome:</b> <?php echo $rows_orcamento['nome']; ?></p>
                                    <p><b style="font-weight: bold">Email:</b> <?php echo $rows_orcamento['email']; ?></p>
                                    <p><b style="font-weight: bold">Telefone:</b> <?php echo $rows_orcamento['telefone']; ?></p>
                                    <p><b style="font-weight: bold">Cidade:</b> <?php echo $rows_orcamento['cidade']; ?></p>
                                    <p><b style="font-weight: bold">Mensagem:</b> <?php echo $rows_orcamento['mensagem']; ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fim Modal -->

                <?php } ?>
                </tbody>
            </table>
            <?php
            $result_pg = "SELECT COUNT(id) AS num_result FROM agendar_clientes";
            $resultado_pg = mysqli_query($con, $result_pg);
            $row_pag = mysqli_fetch_assoc($resultado_pg);
            //echo $row_pag['num_result']
            $qtd_pg = ceil($row_pag['num_result'] / $quantidade_pagina);

            $max_link = 2;
            echo "<nav>";
            echo "<ul class='pagination justify-content-center'>";

            echo "<li class='page-item'><a href=listar_orcamento_modal.php?pagina=1 class='page-link'>Primeira </a></li>";


            for($pag_ant = $pagina - $max_link; $pag_ant <= $pagina - 1; $pag_ant ++){
                if($pag_ant >= 1){
                    echo "<li class='page-item'><a href=listar_orcamento_modal.php?pagina=$pag_ant class='page-link'>$pag_ant </a></li>";
                }
            }
            echo '<li class="page-item active">';
            echo '<span class="page-link">';
            echo "$pagina";
            echo '</span>';
            echo '</li>';


            for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_link; $pag_dep++){
                if($pag_dep <= $qtd_pg){
                    echo "<li class='page-item'><a href=listar_orcamento_modal.php?pagina=$pag_dep class='page-link'>$pag_dep </a></li>";

                }
            }

            echo "<li class='page-item'><a href=listar_orcamento_modal.php?pagina=$qtd_pg class='page-link'>Última </a></li>";
            echo "</ul>";
            echo "</nav>";

            ?>

        </div>
    </div>



</div>





<!-- Inicio Modal CADASTRAR -->
<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" style="text-align: center;">Cadastrar Orçamento</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="services/cadastro_orcamento.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nome:</label>
                        <input name="nome" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-email" class="control-label">Email:</label>
                        <input name="email" type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-telefone" class="control-label">Telefone:</label>
                        <input name="telefone" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-cidade" class="control-label">Cidade:</label>
                        <input name="cidade" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Mensagem:</label>
                        <textarea name="mensagem" class="form-control"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Fim Modal -->

<!--INICIO MODAL EDITAR-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel" style="text-align: center;"><?php echo $rows_orcamento['nome']; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="services/editar_orcamento_banco.php">

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Nome:</label>
                        <input name="nome" type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-email" class="control-label">Email:</label>
                        <input name="email" type="text" class="form-control" id="recipient-email">
                    </div>
                    <div class="form-group">
                        <label for="recipient-telefone" class="control-label">Telefone:</label>
                        <input name="telefone" type="text" class="form-control" id="recipient-telefone">
                    </div>
                    <div class="form-group">
                        <label for="recipient-cidade" class="control-label">Cidade:</label>
                        <input name="cidade" type="text" class="form-control" id="recipient-cidade">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Mensagem:</label>
                        <textarea name="mensagem" class="form-control" id="mensagem"></textarea>
                    </div>

                    <input name="id" type="hidden" class="form-control" id="id" value="">


                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Alterar</button>

                </form>
            </div>

        </div>
    </div>
</div>
<!--FIM MODAL EDITAR-->





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

<!--SCRIPT EDITAR MODAL-->
<script type="text/javascript">
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        var recipientnome = button.data('whatevernome')
        var recipientemail = button.data('whateveremail')
        var recipienttelefone = button.data('whatevertelefone')
        var recipientcidade = button.data('whatevercidade')
        var recipientmensagem = button.data('whatevermensagem')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('ID ' + recipient)
        modal.find('#id').val(recipient)
        modal.find('#recipient-name').val(recipientnome)
        modal.find('#recipient-email').val(recipientemail)
        modal.find('#recipient-telefone').val(recipienttelefone)
        modal.find('#recipient-cidade').val(recipientcidade)
        modal.find('#mensagem').val(recipientmensagem)

    })
</script>
</body>
</html>