<!-- <?php 
    include('verifica_login.php');
    include('conexao.php');
    include('selecionar.php');
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
  <script type="text/javascript">
    $(document).ready(function(){
    $("#cpf").mask("000.000.000-00");
    $('#nome').mask('SSSSSSSSSSSSSSSSSSSS')
  })
  </script>
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
        <a class="nav-link" href="control_doadores.php">Lista completa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pesquisa_doadores.php">Pesquisa</a>
      </li>
    </ul>
  </div>
  </nav>

<body>
  <header>
    <img class="logo" src="./assets/logo.png" alt="DOE">
    <h3>EDITAR INFORMAÇÔES DO DOADOR</h3>
  </header>

  <!--painel editar-->

  <?php $dado = $con -> fetch_array()?>

  <section class="form">
  <h2>Altere as informações desejadas</h2>
    <form action="alterar.php" method="POST">
      <input hidden type="text" name="id" id="id"value="<?php echo $dado["id"] ?>" required>
      <input type="text" name="nome" id="nome"value="<?php echo $dado["nome"] ?>" required>
      <input type="text" name="email" id="email" value="<?php echo $dado["email"] ?>" required>
      <input type="text" name="cpf" id="cpf" value="<?php echo $dado["cpf"] ?>" required>
      <div class="divSelect">
        <select name="tipo" id="tipo" required>
          <option value="<?= $dado["tipo"] ?>" hidden><?php echo $dado["tipo"] ?></option>
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
      <div>
      <button type="submit" class="btn-outline-danger">SALVAR</button><a href="control_doadores.php"><button class="btn-outline-danger">CANCELAR</button></a>
      </div>
    </form>
  </section>

<!--painel editar-->

  <footer>Com ❤ Seis Biônicos</footer>
</body>
</html>