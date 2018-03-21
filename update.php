<?php 
	include_once('conexao.php');

	
	var_dump($_POST);
	
	$id = $_POST['idreg'];
	$nome = $_POST['nome'];
    $email = $_POST['email'];
    //$senha = $_POST['senha']; 

    //echo " $nome - $nome ";

	$up = $pdo->prepare('UPDATE cadastro SET nome = :nome , email = :email WHERE id = :id');
	$up->bindValue(":nome",$nome);
	$up->bindValue(":email",$email);
	$up->bindValue(":id",$id);
	$up->execute();


header('location:lista.php#'.$id);





 ?>