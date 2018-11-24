<?php
session_start();
include_once('conexao.php');

$id= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)){

    $result_usuario = "DELETE FROM agendar_clientes WHERE id='$id'";
    $resultado_usuario = mysqli_query($con, $result_usuario);

    if(mysqli_affected_rows($con)) {
        echo

        "<script>   
        window.location.href=' ../listar_orcamento_modal.php';
        </script>";

    }else{

        echo
        "<script>
        alert('Erro ao apagar orçamento');
        window.location.href=' ../listar_orcamento_modal.php';        
        </script>";

    }
}else{
    echo
    "<script>
        alert('Necessário selecionar um orçamento');
        window.location.href=' ../listar_orcamento_modal.php';
    </script>";
}



?>