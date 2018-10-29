<?php
    include_once("conexao.php");
    
    if(!empty($_POST)){
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = "INSERT INTO adm(nome,email,senha) VALUES ('$nome','$email','$senha')";
        $result = mysqli_query($con, $sql);
        header('Location: obrigado.php');        
    }	
	
	
	
?>