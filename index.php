<?php 
session_start();
include 'conexao.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar</title>
</head>
<body>
	<center>
<h3>
<?php 
if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
?>
</h3>

<h3 style=" background-color: #696969; padding: 1rem;">
	<a href="home.php" style="color: #fff; padding: 1rem;">Home</a>  
	<a href="index.php" style="color: #fff; padding: 1rem;">Cadastrar</a>
</h3>

<div style="border: 1px solid #696969; width: 25%; height: 30%; background-color: #696969; color: #fff;" >

<form method="POST" action="cadastro.php" >
<br>
<input type="text" name="nome" placeholder="Seu Nome" required style="padding: 0.5rem; width: 90%; border: 1px solid #696969;" /><br><br>

<input type="email" name="email" placeholder="Seu Email" required style="padding: 0.5rem; width: 90%; border: 1px solid #696969;" /><br><br>

<input type="password" name="pass" placeholder="Sua Senha" required style="padding: 0.5rem; width: 90%; border: 1px solid #696969;" /><br><br>

<input type="radio" name="situacao" value="H" required> Homen
<input type="radio" name="situacao" value="M" required> Mulher
<br><br>

<input type="submit" name="" value="Cadastrar" style="width: 50%; background-color: #500; color: #fff; padding: 0.3rem; border: 1px solid #696969;">
<br>
<br>
</form>

</div>

</center>

</body>
</html>