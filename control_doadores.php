<!-- <?php 
    include('verifica_login.php');
    include('conexao.php');
    include('consulta_doadores.php');
?>  -->
<!DOCTYPE html>

<html lang="pt-br">

<head>
  <!--Configurações da página-->
  <title>Doe sangue! Doe vida!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="imagem/png" href="./assets/icon.png" />
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    $("#cpf").mask("000.000.000-00");
    $('#nome').mask('SSSSSSSSSSSSSSSSSSSS')
  })
  </script>
</head>

<body>
<!--LISTA DOADORES-->
  <header>
    <img class="logo" src="./assets/logo.png" alt="DOE">
    <h3>LISTA DE DOADORES</h3>
  </header>
    
  <section>
  <div class="table-responsive">
  <table id="lista">
    <tr id="lista">
      <th id="titulo">NOME</th>
      <th id="titulo">TIPO</th>
      <th id="titulo">CPF</th>
      <th id="titulo">E-MAIL</th>
    </tr>
        <?php while ($dado = $con -> fetch_array()){ ?>
        <tr>
        <td id="lista"><?php echo $dado["nome"] ?></td>
        <td id="lista"><?php echo $dado["tipos"] ?></td>
        <td id="lista"><?php echo $dado["cpf"] ?></td>
        <td id="lista"><?php echo $dado["email"] ?></td>
          <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">EDITAR</button>
            <a href='delete_doador.php?id=<?=$dado["id"]?>'><input type="button" class="btn btn-primary" value="EXCLUIR"></a>
          </td>
        </tr>
        <?php }?>
      </table>
  </div>
  </section>
<!--LISTA DOADORES-->
<!-- EDITAR -->
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
        <form action="update_doador.php" method="POST">
          <input type="hidden" name="id" value="<?= $dado['id']?>">
          <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome" required value="<?= $dado["nome"]?>"> 
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
          <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF" required>
          <input class="form-control" type="text" name="email" id="email" placeholder="Email" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <button type="submit" class="btn btn-primary">SALVAR</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- EDITAR -->
<!-- MENU ADMIN -->
    <table id="menu">
      <tr>
        <th>
        <?php echo $_SESSION['user'];?>:
        </th>
        <th>
          <a href="logout.php">LOGOUT</a>
        </th>
        <th>
          <a href="form.php">FORMULÁRIO</a>
        </th>
      </tr>
    </table>
<!-- MENU ADMIN -->
  <footer>Com ❤ Seis Biônicos</footer>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>