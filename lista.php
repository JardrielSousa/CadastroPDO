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
      <!--Code PHP para puxar/listar do banco-->
      <?php 
        include_once("conexao.php");//link para a page conexão
        $lista = $pdo->query("SELECT * FROM cadastro");//lista tudo
        $resol = $lista->fetchAll();//lista todos


        

              foreach ($resol as $row)//laço de repetição para exibir a lista
              { ?>
      <tr> <!--Mostra os resultados em tabelas-->
                <td><a name="<?=$row['id'];?>"></a><?php echo $row['id'];?>
                </td>
                <td><?php echo $row['nome'];?></td>
                
                
                <td>
                  <!--Botao vizualizar
                  target : para que o id  cadastrado não se repita
                  whatever : para exibir o id 
                  -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['id'];?>" data-whatever="<?php echo $row['id'];?>">Visualizar</button>
                  <!--Botao editar
                  whatever : para exibir o id , nome e email 
                  joga os dados para os recipientes do modal
                  -->
                  <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row['id']?>" data-whatevernome="<?php echo $row['nome'];?>"
                    data-whateveremail="<?php echo $row['email'];?>" data-whateverid="<?php echo $row['id'];?>" >Editar</button>

                  <a href="excluir.php?id=<?=$row['id']?>">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" data-whatever="@mdo" href="">Apagar</button></a>


                 
                </td>


        </tr>    
        <!-- Page de Exibição Botão Visualizar-->
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
  

<!--Page de Exibção Botão editar-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel"></h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="update.php">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Nome:</label>
            <input type="text" name='nome' class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Email:</label>
            <textarea class="form-control" name='email' id="recipient-email"></textarea>
          </div>
          <input type="text" name='idreg' hidden="hidden" id="idreg">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
    </div>
  </div>
</form>
</div>
<script>
  //Modal Editar
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever')//variaveis referentes ao parametro criado whater no botão  editar
  var recipientnome = button.data('whatevernome')
  var recipientemail = button.data('whateveremail')
  var recipientid = button.data('whateverid')
  var modal = $(this)
  modal.find('.modal-title').text('ID: ' + recipient)//Mensagem de exibiçao do modal
  modal.find('#recipient-name').val(recipientnome)//exibe a variavel com o valor puxado do banco
  modal.find('#recipient-email').val(recipientemail)
  modal.find('#idreg').val(recipientid)
  
})
</script>
 </body>
 </html> 