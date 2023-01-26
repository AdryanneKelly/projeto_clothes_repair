<?php
$nome = $_POST['nome'];
$preco = $_POST['preco'];

include('conexao.php');
$sql = "INSERT INTO servico(nome, preco) VALUES ('$nome', '$preco')";
mysqli_query($conexao, $sql);

mysqli_close($conexao);
header('location:cadservsecre.php');
?>