<?php
  $host = "localhost";
  $usuario = "root";
  $senha = "";
  $bd = "doe_sangue";

  $mysqli = mysqli_connect($host, $usuario, $senha, $bd);

  if ($mysqli->connect_errno)
    echo "Falha de conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_errno;
?> 