<?php
$nomecliente = $_POST['nomecliente'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];

include('conexao.php');
$sql = "INSERT INTO cliente(nome, telefone, cpf, email) VALUES ('$nomecliente', '$telefone', '$cpf', '$email')";
mysqli_query($conexao, $sql);

mysqli_close($conexao);
header('location:cadclientesecre.php');
?>