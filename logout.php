<?php 
	session_start();
	session_destroy();
	echo "<script> Saindo!!!</script>";
	echo "<script> window.location='index.php'</script>";
?>