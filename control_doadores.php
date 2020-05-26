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
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script src="https://kit.fontawesome.com/2ee81ba3b1.js" crossorigin="anonymous"></script>
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
        <a class="nav-link" href="pesquisa_doadores.php">Pesquisa</a>
      </li>
    </ul>
  </div>
  </nav>

<body>
<!--LISTA DOADORES-->
<header>
    <img class="logo" src="./assets/logo.png" alt="DOE">
    <h3>LISTA DE DOADORES</h3>
</header>

<div class="container">
    <div class="table-responsive">
        <table id="lista" class="table table-responsive table table-bordered table-striped">
            <tr id="lista">
                <th id="titulo">NOME</th>
                <th id="titulo">TIPO</th>
                <th id="titulo">CPF</th>
                <th id="titulo">E-MAIL</th>
                <th id="titulo">AÇÕES</th>
            </tr>
            <?php while ($dado = $con -> fetch_array()){ ?>
                <tr>
                    <td id="lista"><?php echo $dado["nome"] ?></td>
                    <td id="lista"><?php echo $dado["tipo"] ?></td>
                    <td id="lista"><?php echo $dado["cpf"] ?></td>
                    <td id="lista"><?php echo $dado["email"] ?></td>
                    <td id="lista">
                        <a class="btn btn-outline-danger" href='edita_doador.php?id=<?=$dado["id"]?>' title="EDITAR"><span class="fas fa-edit"></span></a>
                        <a class="btn btn-outline-danger" href='deletar.php?id=<?=$dado["id"]?>' title="EXCLUIR"><span class="fas fa-trash"></span></a>
                    </td>
                </tr>
            <?php }?>
        </table>
    </div>
</div>
<!--LISTA DOADORES-->

<footer>Com ❤ Seis Biônicos</footer>
</body>
</html>