<?php

if (isset($_POST['cadastrar'])) {                       
	                      /*Recebe os campos do form e armazena nas variáveis*/
$nome = $_POST['campo_nome'];   
$email = $_POST['campo_email'];
$senhaCad = $_POST['campo_senha'];

	include ('conexao.php');  
	mysqli_select_db($conexao, "$db") or die ("Erro ao selecionar o Banco");

	$sqlUsu = "SELECT * FROM empresa WHERE nome = '$nome'";
    $queryUsu = mysqli_query($conexao, $sqlUsu) or die ("Erro na consulta sql do Nome de Usuário");
    $retornoUsu = mysqli_num_rows($queryUsu);


//________________________________________________________________________________________________	
    if ($retornoUsu != 0) {   /*Verifica se o Nome de Usuário já está cadastrado*/
    echo "<script>
	alert('Nome da empresa já cadastrado!')
	window.location.href= 'register.php'
	</script>
	";
    }else{                            /*Se não, os dados são inseridos no banco*/
	include_once 'conexao.php';
	mysqli_select_db($conexao,"$db");

//Rotina SQL para inserir no banco

	$sqlInserir = "INSERT INTO empresa(nome, email, senha)
				   VALUES('$nome', '$email', '$senhaCad')";

	if(mysqli_query($conexao, $sqlInserir)){

			echo "<script>
		alert('Empresa cadastrada com sucesso!')
		window.location.href= 'login.php'
		</script>
		";

	}else{  //Informa o erro
		echo "<h3>Erro na inserção: </h3>".mysqli_error($conexao);
	}
		mysqli_close($conexao);
	}

//________________________________________________________________________________________________

	$sqlEmail = "SELECT * FROM empresa WHERE email ='$email'";
	$queryEmail = mysqli_query($conexao, $sqlEmail) or die ("Erro na consulta sql do Email");
	$retornoEmail = mysqli_num_rows($queryEmail);
	
	if($retornoEmail != 0){   /*Verifica se o email já está cadastrado*/

	echo "<script>
	alert('Email já cadastrado!')
	window.location.href= 'register.php'
	</script>
	";
}else{                            /*Se não, os dados são inseridos no banco*/
	include_once 'conexao.php';
	mysqli_select_db($conexao,"$db");

//Rotina SQL para inserir no banco

	$sqlInserir = "INSERT INTO empresa(nome, email, senha)
				   VALUES('$nome', '$email', '$senhaCad')";

	if(mysqli_query($conexao, $sqlInserir)){

			echo "<script>
		alert('Empresa cadastrada com sucesso!')
		window.location.href= 'login.php'
		</script>
		";

	}else{  //Informa o erro
		echo "<h3>Erro na inserção: </h3>".mysqli_error($conexao);
	}
		mysqli_close($conexao);
	}



}

?>


<a href="/conexao (com Bootstrap)/Login/login.html"">Voltar</a>
</body>
</html>
