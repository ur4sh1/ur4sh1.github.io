<!-- <?php 
    include('verifica_login.php');
    include('conexao.php');
    include('consulta_recente.php');
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
  <!--Conteúdo da página-->
  <header>
    <img class="logo" src="./assets/logo.png" alt="DOE">
    <h2>O que é a doação de sangue?</h2>
    <div class="doarsangue">
    <p>A doação de sangue é um gesto solidário!</p>
    <p>Doar uma pequena quantidade do próprio sangue pode salvar vidas!</p>
    </div>
    <button class="btn btn-outline-danger"><h3>FORMULÁRIO</h3></button>
  </header>
    
 

  <section class="form hide">
  <h2>Logado como: <?php echo $_SESSION['user'];?></h2>
    <form action="inserir.php?p=form.php" method="POST">
      <input type="text" name="nome" id="nome" placeholder="Nome" required>
      <input type="text" name="email" id="email" placeholder="Email" required>
      <input type="text" name="cpf" id="cpf" placeholder="CPF" required>
      <div class="divSelect">
        <select name="tipo" id="tipo" required>
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
      <button type="submit" class="btn-outline-danger">ADICIONAR DOADOR</button>
    </form>
  </section>

  <main>
    <h2>Últimos <span>doadores</span></h2>
    <section class="donors">
      <?php while ($dado = $con -> fetch_array()){ ?>
        <div class="donor">
          <div class="blood"><?php echo $dado["nome"] ?></div>
          <p><?php echo $dado["tipo"] ?></p>
        </div>
      <?php }?>
    </section>
  </main>



  <footer>Com ❤ Seis Biônicos</footer>
  <script src="js/script.js"></script>
</body>
</html>