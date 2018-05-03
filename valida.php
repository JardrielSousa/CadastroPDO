<!DOCTYPE html>
<html>
<head>
	<title>valida</title>
	<script type="text/javascript">
		function msgOk(){
			
			window.location.href = "lista.php";
		}
		function msgError(){
			alert("Falha ao altenticar!");
			window.location.href = "login.php";
		}
	</script>
</head>
<body>

</body>
</html>
<?php
	
	include_once('conexao.php');
	
		//isset -> verifica campos em branco

			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$senha = md5($senha);

	$lista = $pdo->prepare("SELECT * FROM login where email = :email && senha = :senha ");
	$lista->bindValue(":email",$_POST['email']);
	$lista->bindValue(":senha",md5($_POST['senha']));
	$lista->execute();

	
	if($lista->rowCount() ==1){
		session_start();
		$_SESSION['user_email'] = $email;
		$_SESSION['user_senha'] = $senha;
		echo "<script>msgOk()</script>";
	}else{
		echo "<script>msgError()</script>";
	}	


?>