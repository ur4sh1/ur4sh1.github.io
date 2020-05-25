<?php
include_once 'conexao.php';
$tipo = filter_input(INPUT_POST,'tipo');

$consulta = "SELECT * FROM doadores WHERE tipo LIKE '%$tipo%'";
//$con = $mysqli -> query ($consulta) or die ($consulta -> error);
$resultado_user = mysqli_query($mysqli, $consulta);

if(($resultado_user)AND($resultado_user->num_rows != 0)){
    while($row_user = mysqli_fetch_assoc($resultado_user)){
        echo"<li>".$row_user['nome']."<li>";
    }
}else{
    echo "Nenhum usuário encontrado...";
}

?>