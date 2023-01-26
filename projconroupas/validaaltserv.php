<?php
include('conexao.php');

$id = $_GET['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];

$sql = "UPDATE servico SET nome='$nome', preco='$preco' WHERE id='$id'";
mysqli_query($conexao, $sql);

mysqli_close($conexao);
header('location:consulservsecre.php');
?>