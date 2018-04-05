<?php 
try{
	//conecta ao bd
$pdo = new PDO('mysql:host=localhost;dbname=cadastro','root','');

}catch(PDOException $e){
echo("Erro ao Conectar ao Banco".$e->mensage());
}



?>
