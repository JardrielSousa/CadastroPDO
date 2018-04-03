
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
			<div class="col-md-offset- borda">

				<form action="inseri.php" method="POST" class="col-sm-offset-4 col-xs-offset-1 ">
					<h1>Cadastro</h1>
					<div class="form-group col-md-5 col-sm-6 col-xs-10">
						<input type="text" placeholder="nome" name="nome" id="nome"  class="form-control" required/><br>
						<input type="email" placeholder="email" name="email" class="form-control"><br>
						<input type="password" placeholder="senha" name="senha" class="form-control"><br>
						<input type="submit" value="enviar" class="btn-lg btn-default col-xs-12">
					</div>
				
				</form>
			</div>
		</div>
	</div>
</body>
</html>