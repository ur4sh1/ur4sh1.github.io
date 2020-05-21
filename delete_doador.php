<?php
require_once 'conexao.php';

function deletaDoador($mysqli, $id){
  $query = "DELETE FROM doadores WHERE id = {$id}";
  return mysqli_query($mysqli, $query);
}

$id= filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
deletaDoador($mysqli, $id);
header("Location: control_doadores.php");

?>