<?php
include('conexao.php');
$id = $_GET['id'];

$sql = "DELETE FROM agendamento WHERE id='$id'";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header('location:pagsecretaria.php');
?>