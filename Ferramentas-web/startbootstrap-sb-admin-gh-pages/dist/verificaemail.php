<?php

if(isset($_POST['enviar'])){
session_start();
$_SESSION['E_email'] = $_POST['campo_email'];

$E_email =  $_POST['campo_email'];


include 'conexao.php';
	mysqli_select_db($conexao, "$db") or die ("Erro ao selecionar o Banco");

	$sql = "SELECT * FROM empresa WHERE email ='$E_email'";

	$queryAlt = mysqli_query($conexao, $sql) or die ("Erro na consulta sql");

	$retorno = mysqli_num_rows($queryAlt);
	if($retorno == 0){

		echo "<script>
	  	alert('Email inválido')
	  	window.location.href= 'password.php'
	  	</script>
	 	";

	}else{
		header('location:novasenha.php?email='.$E_email);
	}





}


?>

<a href="/conexao (com Bootstrap)/Login/login.php">Voltar</a>

</body>
</html>