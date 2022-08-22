<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

<center>

<h3 style=" background-color: #696969; padding: 1rem;">
	<a href="home.php" style="color: #fff; padding: 1rem;">Home</a>  
	<a href="index.php" style="color: #fff; padding: 1rem;">Cadastrar</a>
</h3>

<div style="width: 25%; height: 30%; background-color: #696969; color: #fff; padding: 1rem; text-align: left;">
	<center><h4>Cadastrados</h4></center>
<?php
session_start();
include_once("conexao.php");

$sql="SELECT * FROM usuario";
$linhas=mysqli_query($conn, $sql);

 while ($row_usuario=mysqli_fetch_assoc($linhas)){
  ?>
<p>Id: <?php echo $row_usuario['id']; ?></p>
<p>Nome: <?php echo $row_usuario['nome']; ?></p>
<p>Email: <?php echo $row_usuario['email']; ?></p>
<p>Sexo: <?php echo $row_usuario['sexo']; ?></p>
<p>Senha <small>(Criptogafado)</small>: <?php echo $row_usuario['pass']; ?></p>
<hr>

<?php } ?>
</div>


</center>

</body>
</html>