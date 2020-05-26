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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><?php echo $_SESSION['user'];?>:</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="logout.php">Sair</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form.php">Formulário</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="control_doadores.php">Lista completa</a>
      </li>
    </ul>
  </div>
  </nav>

<body>
<header>
    <img class="logo" src="./assets/logo.png" alt="DOE">
    <h3>PESQUISA DE DOADORES</h3>
</header>
    <div class="container">
        <!-- MENU PESQUISA -->
        <form method="POST" action="">
            <label for="pesquisa">Pesquise por tipo sanguíneo, nome ou e-mail:</label>
            <input class="form-control" type="text" name="pesquisa" id="pesquisa" placeholder="Tipo"/>
        </form>

        <div class="resultado"></div>
    </div>

  <footer>Com ❤ Seis Biônicos</footer>
  <script type="text/javascript" src="js/pesquisa.js"></script>
</body>
</html>