<?php
session_start();
include_once("conexao.php");

if (isset($_POST['email']) && isset($_POST['pass'])) {
	$email= $_POST['email'];
	$pass= $_POST['pass'];

	$sql="SELECT * FROM usuario WHERE email='$email' AND pass='$pass' LIMIT 1";
	$resultado= mysqli_query($conn, $sql);

	header("Location: home.php");
}else{
	header("Location: login.php");
  }

?>