<?php
include('conexao.php');
$id = $_GET['id'];

$sql = "DELETE FROM cliente WHERE id='$id'";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header('location:consulclientesecre.php');
?>