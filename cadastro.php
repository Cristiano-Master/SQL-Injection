<?php 
session_start();
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$sexo = $_POST['situacao'];
$pass = $_POST['pass'];

$passcrip=md5($pass);


 $inserir_valor = "INSERT INTO usuario  (nome,email,sexo,pass) VALUES ('$nome','$email','$sexo','$passcrip')";
 
 $resultado=mysqli_query($conn, $inserir_valor);
 
 if (mysqli_insert_id($conn)) {
$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
header("Location: index.php");
 }else{
$_SESSION['msg'] = "<p style='color:green;'>Usuário não cadastrado</p>";
header("Location: index.php");
 }

 ?>