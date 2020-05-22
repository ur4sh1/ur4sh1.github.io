<?php
  include_once("conexao.php");
  $id = filter_input(INPUT_POST,'id');
  $nome = filter_input(INPUT_POST,'nome');
  $email = filter_input(INPUT_POST,'email');
  $cpf = filter_input(INPUT_POST,'cpf');
  $tipo = filter_input(INPUT_POST,'tipo');

$update = "UPDATE doadores SET nome ='{$nome}',
 email='{$email}',
 cpf='{$cpf}', 
 tipo ='{$tipo}'
 WHERE id = {$id}";
  
  mysqli_query($mysqli, $update);
  header("Location: control_doadores.php");

?>