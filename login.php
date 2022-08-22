<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>


	<center>
<small>
<?php 
if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
?>
</small>

<div style="border: 1px solid #696969; width: 25%; height: 30%; background-color: #696969; color: #fff;" >
	<h3>Faça o login para entrar</h3>

<form method="POST" action="entrar.php" >
<br>
<input type="email" name="email" placeholder="Seu Email" required style="padding: 0.5rem; width: 90%; border: 1px solid #696969;" /><br><br>

<input type="password" name="pass" placeholder="Sua Senha" required style="padding: 0.5rem; width: 90%; border: 1px solid #696969;" /><br><br>

<br><br>

<input type="submit" name="submit" value="Login" style="width: 50%; background-color: #500; color: #fff; padding: 0.3rem; border: 1px solid #696969;">
<br>
<br>
</form>

</div>

</center>

</body>
</html>