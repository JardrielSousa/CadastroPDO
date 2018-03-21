<?php 
	
	//faz conexão ao banco
	include_once('conexao.php');
	
	var_dump($_POST);

	//variveis com dados retornadas via $_POST
	$id = $_POST['idreg'];
	$nome = $_POST['nome'];
    $email = $_POST['email'];
    //$senha = $_POST['senha']; 

    
    //comando Sql para alterar cadastro
	$up = $pdo->prepare('UPDATE cadastro SET nome = :nome , email = :email WHERE id = :id');
	$up->bindValue(":nome",$nome);
	$up->bindValue(":email",$email);
	$up->bindValue(":id",$id);
	$up->execute();

	//Retorna para pagina lista e retorna para o cadastro alterado
	header('location:lista.php#'.$id);





 ?>