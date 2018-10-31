<?php
    include_once("conexao.php");
    if(!empty($_POST)){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM adm WHERE email = '$email' and senha = '$senha' ";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0){
            header('Location: listar_clientes.php');             
            session_start();
            /*session is started if you don't write this line can't use $_Session  global variable*/
            $_SESSION["newsession"]=$email;

        }else{
            header('Location: login.php?error=1'); 
        }                   
    }	
?>