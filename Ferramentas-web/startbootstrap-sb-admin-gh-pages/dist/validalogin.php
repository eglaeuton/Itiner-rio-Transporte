<?php 

    if(isset($_POST['login']))
   {
      session_start();
$_SESSION['email'] = $_POST['campo_email'];


$email = $_SESSION['email'];
$senhaLogin = $_POST['campo_senha'];


 include ('conexao.php');
mysqli_select_db($conexao, "$db") or die ("Erro ao selecionar o Banco");

$sql = "SELECT * FROM empresa WHERE email ='$email' AND senha ='$senhaLogin'";
$queryLogin = mysqli_query($conexao, $sql) or die ("Erro na consulta sql");

$retorno = mysqli_num_rows($queryLogin);
if($retorno == 0){

echo "<script>
alert('Email ou senha inválidos')
window.location.href= 'login.php'
</script>
";

}
    
    else{
echo "<script>
window.location.href= 'index_.php'
</script>
";
    }
  	
  	  }






?>