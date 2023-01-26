<?php
$id = $_GET['id'];
$nomecliente = $_POST['nomecliente'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];

include('conexao.php');
$sql = "UPDATE cliente SET nome='$nomecliente', telefone='$telefone', cpf='$cpf', email='$email' WHERE id='$id'";
mysqli_query($conexao, $sql);

mysqli_close($conexao);
header('location:consulclientesecre.php');