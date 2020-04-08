<?php
  include_once("conexao.php");
  $nome = filter_input(INPUT_POST,'nome');
  $email = filter_input(INPUT_POST,'email');
  $cpf = filter_input(INPUT_POST,'cpf');
  $tipos = filter_input(INPUT_POST,'tipos');
  
  $cadastro = "INSERT INTO doadores (nome, email, cpf, tipos) 
               VALUES ('$nome','$email', '$cpf', '$tipos')";
  
  mysqli_query($mysqli, $cadastro);

  echo "<script>location.href='index.php';</script>";

?>