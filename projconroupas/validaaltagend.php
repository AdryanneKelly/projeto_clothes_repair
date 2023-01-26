<?php
include('conexao.php');
$id = $_GET['id'];
$nomecliente = $_POST['nomecliente'];
$servicodesejado = $_POST['servicodesejado'];
$datainicio = $_POST['datainicio'];
$dataentrega = $_POST['dataentrega'];
$preco = $_POST['preco'];

$sql = "UPDATE `agendamento` SET nomecliente='$nomecliente', servicodesejado='$servicodesejado', datainicio='$datainicio',
		 dataentrega='$dataentrega', preco='$preco' WHERE id='$id'";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header('location:pagsecretaria.php');


?>