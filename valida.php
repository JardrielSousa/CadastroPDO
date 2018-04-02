<?php
	session_start();//iniciando session
	include_once('conexao.php');
	if((isset($_POST['email'])) && (isset($_POST['senha'])))
	{
		//isset -> verifica campos em branco

			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$senha = md5($senha);


	//compara no banco se já esta cadastrado
			 $lista = $pdo->query("SELECT * FROM login where email = '$email' && senha = '$senha' LIMIT 1");
	        $resol = $lista->fetchAll();

	//estrutura de decisão 
			if ( empty($resol)){//se dados estiverem em branco
				$_SESSION['LoginErro'] = "Usuário ou Senha incorreta!";
				header('location:login.php');
			} elseif(isset($resol)) { // se estiver tudo ok
				$_SESSION['srnome'] = $resol['nome'];
				$_SESSION['email'] = $resol['email'];

				header('location:lista.php');
			}else{ // se estiver algo errado
			$_SESSION['LoginErro'] = "Usuário ou Senha incorreta!";//variavel global onde valida usuario e senha
			header('location:login.php');
		}
			

	}else{ // se dados tiver em branco
		$_SESSION['LoginErro'] = "Usuário ou Senha incorreta!";//variavel global onde valida usuario e senha
		header('location:login.php');
	}

?>