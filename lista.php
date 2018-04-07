<?php
 

session_cache_expire(2);

 ?>
<!DOCTYPE html>
 <html lang="pt-br">
 <head>

   <meta charset="UTF-8">
   <title>Lista de Cadastros</title>
   <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link rel="stylesheet" href="css/cadastro.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
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
  <a href="sair.php">sair</a>
   <div class="panel-heading ">Listas dos Cadastrados</div>
    <!-- Table -->
  <table class="table page-header">
    <thead>
    <tr>
      <th>id</th>
      <th>Nome</th>
      
    </tr>
    </thead>

      <tbody>
      </tbody>
      <?php 
        include_once("conexao.php");
        $lista = $pdo->query("SELECT * FROM login");
        $resol = $lista->fetchAll();


        

              foreach ($resol as $row)              
              { ?>
      <tr>
                <td><?php echo $row['id'];?>
                </td>
                <td><?php echo $row['nome'];?></td>
                
                
                <td>
                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['id'];?>" data-whatever="<?php echo $row['id'];?>">Visualizar</button>

                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row['id'];?>" data-whatevernome="<?php echo $row['nome'];?>" data-whateveremail="<?php echo $row['email'];?>">Editar</button>
                <a href="excluir.php?id=<?=$row['id'];?>"> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">Apagar</button>
                  </a>


                  
                </td>

        </tr>    
        <!-- Tela que abre após -->
    <div class="modal fade" id="myModal<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color:black;"><?php echo $row['nome']?></h4>
        <div class="modal-body">
          <p><strong>Nome:</strong><?php echo $row['nome'];?></p></h2>
          <p><strong>Email:</strong><?php echo $row['email'];?></p>
          
          
        </div>
      </div> 
    </div>
  </div>

</div>


</div>
    <?php } ?>
      </tbody>
    
  </table>
 

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form  method="POST" action="update.php">
          <div class="form-group">
            <label for="recipient-name" class="control-label" name="nome">Nome:</label>
            <input type="text" class="form-control" id="recipient-name" name="nome" id="nome">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label" name="email" id="email">Email:</label>
            <textarea class="form-control" id="message-text" name="email"></textarea>
          </div>
          <input type="hidden" name="id" id="id">
           <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Alterar</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
<script type="text/javascript">

    //usado no botao visualizar
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever')
    var recipientnome = button.data('whatevernome')
    var recipientemail = button.data('whateveremail')
     // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('ID:' + recipient)
    modal.find('.modal-body input').val(recipient)
    modal.find('#id').val(recipient)
    modal.find('#recipient-name').val(recipientnome)
    modal.find('#message-text').val(recipientemail)
  
  })
</script>
 </body>
 </html> 