<?php
include 'conexao.php';

$nome 		= $_POST['nome'];
$login 		= $_POST['login'];
$senha 		= $_POST['senha'];
$telefone 	= $_POST['telefone'];
$cpf 		= $_POST['cpf'];
$endereco 	= $_POST['endereco'];
$email 		= $_POST['email'];


$sql = "INSERT INTO costureira(nome, login, senha, telefone, cpf, endereco, email) VALUES ('$nome', '$login', '$senha', '$telefone', '$cpf', '$endereco', '$email')";
mysqli_query($conexao, $sql);

mysqli_close($conexao);
header('location:cadcostugerente.php');
?>