<?php
  $id= filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
  $consulta = "DELETE FROM doadores WHERE id ='$id'";
  $con = $mysqli -> query ($consulta) or die ($consulta -> error);
  header("control_doadores.php");
?>