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
  <script src="js/bootstrap.js"></script>
  <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
  })
  </script>
 </head>
 <body>
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
        $lista = $pdo->query("SELECT * FROM cadastro");
        $resol = $lista->fetchAll();


        

              foreach ($resol as $row)              
              { ?>
      <tr>
                <td><?php echo $row['id'];?>
                </td>
                <td><?php echo $row['nome'];?></td>
                
                
                <td>
                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['id'];?>" data-whatever="<?php echo $row['id'];?>">Visualizar</button>

                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">Editar</button>

                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" data-whatever="@mdo">Apagar</button>


                  
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


    <?php } ?>
      </tbody>
    
  </table>
 </body>
 </html> 