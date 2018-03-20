<?php 
	include_once('conexao.php');
	$id = $_GET['id'] ;

	$deletar = $pdo->prepare("DELETE FROM cadastro WHERE id=:id");
	$deletar->bindValue(":id",$id);
	$deletar->execute();
	
	header('listar.php');
?>
