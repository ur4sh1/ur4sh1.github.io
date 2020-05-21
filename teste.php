<!-- <?php 
    include('verifica_login.php');
    include('conexao.php');
    include('consulta_recente.php');
?>  -->
<!DOCTYPE html>

<html lang="pt-br">

<head>
 
  <title>Doe sangue! Doe vida!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="imagem/png" href="./assets/icon.png" />
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

  

  </script>
</head>

<body>


  
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">EDITAR</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DOADOR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="inserir.php?p=form.php" method="POST">
         <!-- <?php $nome="Ricardo"?> -->
      <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome Completo" required value=""> 
      <input class="form-control" type="text" name="email" id="email" placeholder="Email" required>
      <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF" required>
      <div class="divSelect">
        <select name="tipos" id="tipos">
          <option value="" selected disabled hidden>Tipo Sanguineo</option>
          <option value="A+">A+</option>
          <option value="B+">B+</option>
          <option value="O+">O+</option>
          <option value="AB+">AB+</option>
          <option value="A-">A-</option>
          <option value="B-">B-</option>
          <option value="O-">O-</option>
          <option value="AB-">AB-</option>
        </select>
      </div>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="button" class="btn btn-primary">SALVAR</button>
      </div>
    </div>
  </div>
</div>

  <header>

  </header>
  <footer>Com ❤ Seis Biônicos</footer>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>