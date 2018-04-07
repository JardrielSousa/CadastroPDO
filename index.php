

<!DOCTYPE html>
 <html lang="pt-br">
 <head>

   <meta charset="UTF-8">
   <title>Lista de Cadastros</title>
   <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/trasintions.js"></script>
  <script src="js/bootstrap.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){

    $("#texto").show();
    $("#texto").show(10000);

});
</script>
<script>
    //usado no botao visualizar
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever')
    
    
     // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
  
  })
  </script>
 </head>
 <body>
  

	<div class="banner" id="box">
    <div class="aqui">

  		<div class="text" id="texto">
  			<h1 class="text">Sejam Bem Vindos</h1>
  			<p class="text">Selecionem uma Opção:</p>
  		</div>

  		<div class="text-center" id="botao">
  			<div class="row col-md-2">
  			<a href="login.php" class="btn-lg btn-primary">Login</a>
  			</div>	

  			<div class="row col-md-offset-4">
  			<a href="cadastro.php" class="btn-lg btn-default">Cadastro</a>
  			</div>

  		</div>
    </div>

	</div>
</body>
</html>