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
  <header>
    <img class="logo" src="./assets/logo.png" alt="DOE">
    <h3>EDITAR INFORMAÇÔES DO DOADOR</h3>
  </header>

  <!--painel editar-->

  <?php $dado = $con -> fetch_array()?>

  <section class="form">
  <h2>Altere as informações desejadas</h2>
    <form action="alterar.php?e=edita_doador.php" method="POST">
      <input type="text" name="nome" id="nome"value="<?php echo $dado["nome"] ?>" required>
      <input type="text" name="email" id="email" value="<?php echo $dado["email"] ?>" required>
      <input type="text" name="cpf" id="cpf" value="<?php echo $dado["cpf"] ?>" required>
      <div class="divSelect">
        <select name="tipo" id="tipo" select value="<?php echo $dado["tipo"] ?>">
          <option value="<?= $dado["tipo"] ?>" selected disabled hidden><?php echo $dado["tipo"] ?></option>
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
      <button type="submit" class="btn-outline-danger">SALVAR</button>
      </div>
    </form>
  </section>


<!--painel editar-->
<!--menu admin-->
    <table id="menu">
      <tr>
        <th>
        <?php echo $_SESSION['user'];?>:
        </th>
        <th>
          <a href="logout.php">LOGOUT</a>
        </th>
        <th>
          <a href="control_doadores.php">CONTROL</a>
        </th>
      </tr>
    </table>

  <footer>Com ❤ Seis Biônicos</footer>
</body>
</html>