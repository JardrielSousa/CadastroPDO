<?php 
	
	$id = 1 ;

	$deleta = $pdo->prepare("DELETE FROM cadastro WHERE id=:id");
	$deleta->bindValue(":id",$id);
	$deletar->execute();

?>