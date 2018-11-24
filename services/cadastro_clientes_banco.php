<?php
include_once("conexao.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$observacao = $_POST['observacao'];

$sql = "INSERT INTO cliente(nome,email,telefone,celular,cidade,endereco,numero,observacao) VALUES ('$nome','$email','$telefone','$celular','$cidade','$endereco','$numero','$observacao')";
$result = mysqli_query($con, $sql);
header('Location: ../listar_clientes_modal.php');



?>