
  <?php 

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$bd = "seguranca";

	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $bd);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		#echo "Conexao realizada com sucesso";
	}

 ?>