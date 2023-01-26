<?php
include('conexao.php');

$id = $_GET['id'];
$status = "Concluído";

$sql = "UPDATE agendamento SET status='$status' WHERE id='$id'";
mysqli_query($conexao, $sql);

mysqli_close($conexao);
header('location:pagcostureira.php');

?>