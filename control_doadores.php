<!-- <?php 
    include('verifica_login.php');
    include('conexao.php');
    include('listar.php');
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
        <td id="lista"><?php echo $dado["tipo"] ?></td>
        <td id="lista"><?php echo $dado["cpf"] ?></td>
        <td id="lista"><?php echo $dado["email"] ?></td>
          <td>
            <a href='edita_doador.php?id=<?=$dado["id"]?>'><input type="button" class="btn btn-outline-danger" value="EDITAR"></a>
            <a href='deletar.php?id=<?=$dado["id"]?>'><input type="button" class="btn btn-outline-danger" value="EXCLUIR"></a>
          </td>
        </tr>
        <?php }?>
      </table>
  </div>
  </section>
<!--LISTA DOADORES-->

<!-- MENU ADMIN -->
    <table id="menu">
      <tr>
        <th>
        <?php echo $_SESSION['user'];?>:
        </th>
        <th>
          <a href="logout.php"><button id="btnM">LOGOUT</button></a>
        </th>
        <th>
          <a href="form.php"><button id="btnM">FORMULÁRIO</button></a>
        </th>
        <th>
          <a href="pesquisa_doadores.php"><button id="btnM">PESQUISAR</button></a>
        </th>
      </tr>
    </table>
<!-- MENU ADMIN -->

  <footer>Com ❤ Seis Biônicos</footer>
</body>
</html>