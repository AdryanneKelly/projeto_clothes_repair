<?php
	session_start();
	include('conexao.php');
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$secretaria = $_POST['secretaria'];
	$costureira = $_POST['costureira'];
	$gerente = $_POST['gerente'];
	

	if ($secretaria = true) {
		$sql = $conexao->query("SELECT * FROM secretaria WHERE login = '$login' AND senha = '$senha'");
		$resultado= mysqli_fetch_assoc($sql);		
		if ($resultado['login'] == $login AND $resultado['senha'] == $senha) {
			$sql = $conexao->query("SELECT * FROM secretaria WHERE login = '$login' AND senha = '$senha'");
			$resultado= mysqli_fetch_assoc($sql);	
			$_SESSION['id'] = $resultado['id'];
			header('location:pagsecretaria.php');
		} else{
			
		}
	}

	if ($costureira = true) {
		$sql = $conexao->query("SELECT * FROM costureira WHERE login = '$login' AND senha = '$senha'");
		$resultado= mysqli_fetch_assoc($sql);		
		if ($resultado['login'] == $login AND $resultado['senha'] == $senha) {
			$sql = $conexao->query("SELECT * FROM costureira WHERE login = '$login' AND senha = '$senha'");
			$resultado= mysqli_fetch_assoc($sql);	
			$_SESSION['id'] = $resultado['id'];
			header('location:pagcostureira.php');
		} else {

		}
	}

	if ($gerente = true) {
		$sql = $conexao->query("SELECT * FROM gerente WHERE login = '$login' AND senha = '$senha'");
		$resultado= mysqli_fetch_assoc($sql);		
		if ($resultado['login'] == $login AND $resultado['senha'] == $senha) {
			$sql = $conexao->query("SELECT * FROM gerente WHERE login = '$login' AND senha = '$senha'");
			$resultado= mysqli_fetch_assoc($sql);	
			$_SESSION['id'] = $resultado['id'];
			header('location:paggerente.php');
		} else {

		}
	}

	
?>