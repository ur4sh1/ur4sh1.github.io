<?php
  $consulta = "SELECT * FROM doadores order by nome";
  $con = $mysqli -> query ($consulta) or die ($consulta -> error);
?>