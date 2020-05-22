<?php
  $id= filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
  $consulta = "SELECT * FROM doadores WHERE id = {$id}";
  $con = $mysqli -> query ($consulta) or die ($consulta -> error);
?>