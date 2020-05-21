<?php
require_once 'conexao.php';

var_dump($_POST);
die();


function updateDoador($mysqli, $id, $nome, $email, $cpf, $tipo){
  $query = "UPDATE doadores SET nome ={$nome}, email ={$email}, cpf={$cpf}, tipos={$tipo}, WHERE id = {$id},";
  return mysqli_query($mysqli, $query);
}


$id= filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
$nome= filter_input(INPUT_GET,'nome', FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_GET,'email', FILTER_SANITIZE_EMAIL);
$cpf= filter_input(INPUT_GET,'cpf', FILTER_SANITIZE_STRING);
$tipo= filter_input(INPUT_GET,'tipo', FILTER_SANITIZE_STRING);
//updateDoador($mysqli, $id, $nome, $email, $cpf, $tipo);
//header("Location: control_doadores.php");

?>