<?php
    include_once("conexao.php");
    $id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];  
	$mensagem = $_POST['mensagem'];

	$sql = "UPDATE agendar_clientes SET nome='$nome', email='$email', telefone='$telefone', cidade='$cidade', mensagem='$mensagem' WHERE id='$id'";
	$result = mysqli_query($con, $sql);
    
    if(mysqli_affected_rows($con)) {
        echo 
        "<script>   
        alert('Alterado com sucesso!');
        window.location.href=' ../listar_orcamento_modal.php';
        </script>";
              

    }else{
        echo
        "<script>   
        alert('Falha ao alterar orçamento!');
        window.location.href=' ../listar_orcamento_modal.php';
        </script>";

    }
	
	
	
?>