<!-- <?php 
session_start();
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
    $("#senha").mask("000000");
    $('#user').mask('SSSSSSSS')
  })
  </script>
</head>

<body>
  <!--Conteúdo da página-->
  <header>
    <img class="logo" src="./assets/logo.png" alt="DOE">
      <div class="doarsangue">
      <h2>A sua doação importa</h2>
      <p>Até 4 vidas com 1 doação</p>
      <p>Mais de 38 mil doações são necessárias todos os dias</p>
      <p>Apenas 1,9% da população brasileira doa sangue</p>
    </div>
    <button class="btn btn-outline-danger"><h3>Para adicionar doadores faça login</h3></button>
  </header>
<!--inicio de sessão-->
  <?php
    if(isset($_SESSION['nao_autenticado'])):
  ?>
    <div class="notification is-danger" id="top">
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>LOGIN OU SENHA INVÁLIDOS</strong> Tentativa registrada: <?php echo date("d-m-Y H:i:s");?>.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
  <?php
  endif;
  unset($_SESSION['nao_autenticado']);
  ?>
<!--Login-->
  <section class="form hide">
    <h2>SISTEMA DOE SANGUE</h2>
    <form action="login.php" method="POST">
      <input type="text" name="user" id="user" placeholder="USUÁRIO" required>
      <input type="password" name="senha" id="senha" placeholder="SENHA" required>
      <button type="submit" class="btn-outline-danger" >Entrar</button>
    </form>
  </section>
<!--video-->
<div class="vid">
<video controls loop src="video/Campanha_Doe_Sangue.mp4" type="video/mp4" width="600">
<object>
    <embed src="Campanha_Doe_Sangue.mp4" type="application/x-shockwave-flash" 
    allowfullscreen="false" allowscriptaccess="always">  		
  </object>
</video>
<h2>Campanha doe sangue 2017</h2>
</div>
<!--rodapé-->
  <footer>Com ❤ Seis Biônicos</footer>
  <script src="js/script.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>