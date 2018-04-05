<?php 
	include_once('conexao.php');
	$id = $_GET['id'] ;

	$deletar = $pdo->prepare("DELETE FROM login WHERE id=:id");
	$deletar->bindValue(":id",$id);
	$deletar->execute();
	
	header('location:lista.php');
?>
