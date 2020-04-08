<!-- <?php 
    include("conexao.php");
    include("consulta.php");
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
    $("#cpf").mask("000.000.000-00")
  })
  </script>
</head>

<body>
  <!--Conteúdo da página-->
  <header>
    <img class="logo" src="./assets/logo.png" alt="DOE">
    <h2>A sua doação importa</h2>
    <p>Até 3 vidas com 1 doação</p>
    <p>Mais de 38 mil doações são necessárias todos os dias</p>
    <p>Apenas 1,9% da população brasileira doa sangue</p>

    <button class="btn btn-outline-danger"><h3>Quero ajudar</h3></button>
  </header>

  <section class="form hide">
    <h2>Entre na lista de doadores</h2>
    <form action="inserir.php?p=index.php" method="POST">
      <input type="text" name="nome" id="nome" placeholder="Nome Completo" required>
      <input type="text" name="email" id="email" placeholder="Email" required>
      <input type="text" name="cpf" id="cpf" placeholder="Cpf" required>
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
      <button type="submit" class="btn-outline-danger">Quero ajudar</button>
    </form>
  </section>

  <main>
    <h2>Últimos <span>doadores</span></h2>
    <section class="donors">
      <?php while ($dado = $con -> fetch_array()){ ?>
        <div class="donor">
          <div class="blood"><?php echo $dado["nome"] ?></div>
          <p><?php echo $dado["tipos"] ?></p>
        </div>
      <?php }?>
    </section>
  </main>

  <footer>Com ❤ Seis Biônicos</footer>
  <script src="js/script.js"></script>
</body>
</html>