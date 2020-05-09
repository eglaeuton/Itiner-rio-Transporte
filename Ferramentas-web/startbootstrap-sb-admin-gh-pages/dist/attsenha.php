<?php 

if(isset($_POST['envia'])){
	

		session_start();
	$senhaa = $_POST['campo_senha'];
	$email = $_SESSION['E_email'];
	


	if (isset($senhaa)) { 
		include 'conexao.php';
		mysqli_select_db($conexao,"$db")or die("Erro ao selecionar");
		$sqlSenha = "UPDATE empresa
						SET senha = '$senhaa'
						WHERE email = '$email'";

		mysqli_query($conexao, $sqlSenha);
		echo "<script>
	  	alert('senha alterada com sucesso!')
	  	window.location.href= 'login.php'
	  	</script>";

		
	
	}
}
?>

<a href="/conexao (com Bootstrap)/Login/login.php">Cancelar</a>
</body>
</html>
