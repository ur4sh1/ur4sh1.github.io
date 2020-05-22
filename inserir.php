<?php
  include_once("conexao.php");
  $nome = filter_input(INPUT_POST,'nome');
  $email = filter_input(INPUT_POST,'email');
  $cpf = filter_input(INPUT_POST,'cpf');
  $tipo = filter_input(INPUT_POST,'tipo');
  
  $cadastro = "INSERT INTO doadores (nome, email, cpf, tipo) 
               VALUES ('$nome','$email', '$cpf', '$tipo')";
  
  mysqli_query($mysqli, $cadastro);

  echo "<script>location.href='form.php';</script>";

?>