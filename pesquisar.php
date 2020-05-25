<?php
include_once 'conexao.php';

$tipo = $_POST['palavra'];

$consulta = "SELECT * FROM doadores WHERE tipo LIKE '%$tipo%' ORDER BY nome";
//$con = $mysqli -> query ($consulta) or die ($consulta -> error);
$resultado_user = mysqli_query($mysqli, $consulta);

if(($resultado_user)AND($resultado_user->num_rows != 0)){
    while($row_user = mysqli_fetch_assoc($resultado_user)){
        echo $row_user['nome']." ".$row_user['cpf']." ".$row_user['email']."<br>";
    }
}else{
    echo "Nenhum usuário encontrado...";
}

?>