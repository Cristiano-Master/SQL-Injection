<?php 
session_start();
include 'conexao.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
	<center>
<h3><?php #echo $_SESSION['msg']; ?></h3>
<div style="border: 1px solid #696969; width: 25%; height: 30%; background-color: #696969; color: #fff;" >

<form action="cadastro.php" method="POST">
<br>
<input type="text" name="nome" placeholder="Seu Nome" style="padding: 0.5rem; width: 90%; border: 1px solid #696969;" /><br><br>

<input type="email" name="email" placeholder="Seu Email" style="padding: 0.5rem; width: 90%; border: 1px solid #696969;" /><br><br>

<input type="radio" name="situacao" value="H"> Homen
<input type="radio" name="situacao" value="M"> Mulher
<br><br>

<input type="submit" name="notao" value="Cadastrar" style="width: 50%; background-color: #500; color: #fff; padding: 0.3rem; border: 1px solid #696969;">
</form>

</div>

</center>

</body>
</html>