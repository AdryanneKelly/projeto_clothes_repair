<?php
include('conexao.php');
$id = $_GET['id'];
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];

$sql = "UPDATE costureira SET nome='$nome', login='$login', senha='$senha',
		 telefone='$telefone', cpf='$cpf', endereco='$endereco', email='$email' WHERE id='$id'";
mysqli_query($conexao, $sql);
mysqli_close($conexao);
header('location:consusecrecostugerente.php');
?>