<!-- <?php 
    include('verifica_login.php');
    include('conexao.php');
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
  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.mask.min.js"></script>
</head>

<body>
<header>
    <img class="logo" src="./assets/logo.png" alt="DOE">
    <h3>PESQUISA DE DOADORES</h3>
</header>
    <div class="container">
        <!-- MENU PESQUISA -->
        <form method="POST" action="">
            <label for="pesquisa">Pesquise por tipo sanguíneo</label>
            <input class="form-control" type="text" name="pesquisa" id="pesquisa" placeholder="Tipo"/>
        </form>

        <div class="resultado"></div>
    </div>
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
          <a href="control_doadores.php"><button id="btnM">LISTA COMPLETA</button></a>
        </th>
      </tr>
    </table>
<!-- MENU ADMIN -->
  <footer>Com ❤ Seis Biônicos</footer>
  <script type="text/javascript" src="js/pesquisa.js"></script>
</body>
</html>