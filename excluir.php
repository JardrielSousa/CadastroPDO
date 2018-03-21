<?php 
	//faz a conexão ao banco de dados
	include('conexao.php');
	
	//variavel com valor retornado via $_GET
	$id = $_GET['id'] ;


	//Comando Sql que excluir uma linha na tabela
	$deleta = $pdo->prepare("DELETE FROM cadastro WHERE id=:id");
	$deleta->bindValue(":id",$id);
	$deleta->execute();

	//retorna para page lista
	header('location:lista.php');

?>