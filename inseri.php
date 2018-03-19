<?php 


include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);


//insere ao bd
$inseri = 'INSERT INTO cadastro(nome,email,senha) VALUES(:nome,:email,:senha)';



$stmt = $pdo->prepare($inseri);//prepara a conexao entre o bd e o paramentro
$stmt->bindValue(":nome",$nome); // paramentros 
$stmt->bindValue(":email",$email); // paramentros 
$stmt->bindValue(":senha",$senha);// paramentros 
$stmt->execute(); //executa os paramentros

header('location:cadastrado.php');

?>
