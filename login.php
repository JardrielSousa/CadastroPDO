<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
	<link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link rel="stylesheet" href="css/cadastro.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-offset-4">

				<form action="valida.php" method="POST" class="borda">
					<h1>Login</h1>
					<div class="form-group col-md-5">
					
						<input type="email" placeholder="email" name="email" class="form-control"><br>
						<input type="password" placeholder="senha" name="senha" class="form-control"><br>
						<input type="submit" value="enviar" class="btn btn-primary col-md-12"><br>
						<p class="text-center text-danger">
					<?php 
						if(isset($_SESSION['LoginErro'])){
							echo $_SESSION['LoginErro'];
							unset($_SESSION['LoginErro']);
						}
											?>
				</p>
						

					</div>

				</form>
				<div class="col-md-10">
						<p>Efetuar Cadastro ? <a href="cadastro.php">Inscreva-se</a></p>
					</div>
			</div>
		</div>
	</div>
</body>
</html>