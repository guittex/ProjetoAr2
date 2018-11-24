<?php
include_once("services/conexao.php");
$id =  $_GET['id'];
$result_usuario = "SELECT * FROM agendar_clientes WHERE id = '$id'"; 
$resultado_usuario = mysqli_query ($con, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

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
        <link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
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
            

        
        <h1 class="titulo-obrigado">Editar Orçamento</h1>

        <div class="C-base" style="margin-left:0 auto;">

        <form method="POST" action="services/editar_orcamento_banco.php">
            <input type="hidden" name="id" value="<?php echo $row_usuario['id'];?>">  

            <p><label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $row_usuario['nome'];?>"  /></p>

                <p><label for="email">Email:</label>
                    <input type="email" name="email" id="email"  value="<?php echo $row_usuario['email'];?>"/></p>

                <p><label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" id="telefone" value="<?php echo $row_usuario['telefone'];?>"/></p>

                    
                <p><label for="telefone">Cidade:</label>
                    <input type="text" name="cidade" id="cidade" value="<?php echo $row_usuario['cidade'];?>"/></p>
              
                
                <p><label for="mensagem">Mensagem:</label>
                    <textarea name="mensagem" id="mensagem"> <?php echo $row_usuario['mensagem'];?> </textarea></p>

            <input class="btn-C" type="submit" value="Editar">
        </form>          
        
        
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