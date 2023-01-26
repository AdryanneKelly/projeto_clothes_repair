<?php

$nomecliente = $_POST['nomecliente'];
$servicodesejado = $_POST['servicodesejado'];
$datainicio = $_POST['datainicio'];
$dataentrega = $_POST['dataentrega'];
$preco = $_POST['preco'];
$status = "Pendente";

include('conexao.php');
$sql = "INSERT INTO agendamento(nomecliente, servicodesejado, datainicio, dataentrega, preco, status) VALUES ('$nomecliente', '$servicodesejado', '$datainicio', '$dataentrega', '$preco', '$status')";
mysqli_query($conexao, $sql);

mysqli_close($conexao);

header('location:agendarconserto.php');
?>