<?php
  $consulta = "SELECT * FROM doadores order by id desc LIMIT 4";
  $con = $mysqli -> query ($consulta) or die ($consulta -> error);
?>
