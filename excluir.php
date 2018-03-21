<?php 
include('conexao.php');
	
	$id = $_GET['id'] ;



	$deleta = $pdo->prepare("DELETE FROM cadastro WHERE id=:id");
	$deleta->bindValue(":id",$id);
	$deleta->execute();

	header('location:lista.php');

?>