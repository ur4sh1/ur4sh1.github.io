<?php
  $consulta = "SELECT * FROM doadores order by id";
  $con = $mysqli -> query ($consulta) or die ($consulta -> error);
?>