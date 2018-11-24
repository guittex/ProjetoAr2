<?php
include_once("conexao.php");
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$observacao = $_POST['observacao'];

$sql = "UPDATE cliente SET nome='$nome', email='$email', telefone='$telefone', celular='$celular', cidade='$cidade', endereco='$endereco',
 numero='$numero', observacao='$observacao' WHERE id='$id'";
$result = mysqli_query($con, $sql);

if(mysqli_affected_rows($con)) {
    echo
    "<script>   
        alert('Cliente alterado com sucesso!');
        window.location.href=' ../listar_clientes_modal.php';
    </script>";


}else{
    echo
    "<script>   
        alert('Falha ao alterar cliente!');
        window.location.href=' ../listar_clientes_modal.php';
    </script>";


}

?>