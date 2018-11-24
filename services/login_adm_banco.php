<?php
    include_once("conexao.php");
    if(!empty($_POST)){
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM adm WHERE nome = '$nome' and senha = '$senha' ";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0){
            header('Location: ../listar_orcamento.php');
            session_start();
            /*session is started if you don't write this line can't use $_Session  global variable*/
            $_SESSION["newsession"]=$nome;

        }else{
            header('Location: ../login.php?error=1');
        }                   
    }	
?>


