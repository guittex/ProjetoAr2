<?php
	include_once("conexao.php");
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$cidade = $_POST['cidade'];
	$mensagem = $_POST['mensagem'];

	$sql = "INSERT INTO agendar_clientes(nome,email,telefone,cidade,mensagem) VALUES ('$nome','$email','$telefone','$cidade','$mensagem')";
	$result = mysqli_query($con, $sql);
	header('Location: obrigado.php');
	
	
	
?>