<?php
session_start();
include_once("conexao.php");

if (isset($_POST['email']) && isset($_POST['pass'])) {

	#sql injection
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);
	$passcrip=md5($pass);



	$sql="SELECT * FROM usuario WHERE email='$email' AND pass='$passcrip' LIMIT 1";
	$result= mysqli_query($conn, $sql);
	$resultado = mysqli_fetch_assoc($result);


	if (empty($resultado)) {#se for vazio lhe direcione para login

	$_SESSION['msg'] = "Usuário ou senha envalida";
	header("Location: login.php");

	}else{
	header("Location: home.php");
	}


	
}else{
	$_SESSION['msg'] = "Usuário ou senha envalida";
	header("Location: login.php");
  }

?>