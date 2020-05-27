<?php
include_once 'conexao.php';

$tipo = $_POST['palavra'];

$consulta = "SELECT * FROM doadores WHERE tipo LIKE '$tipo%' OR nome LIKE '%$tipo%' OR email LIKE '%$tipo%'
ORDER BY nome";

$resultado_user = mysqli_query($mysqli, $consulta);

if(($resultado_user)AND($resultado_user->num_rows != 0)){
    echo "<ul class='list-group'>";
    while($row_user = mysqli_fetch_assoc($resultado_user)){
        echo "<li class='list-unstyled list-group-item'> Nome: "
        .$row_user['nome']." - CPF: "
        .$row_user['cpf']." - E-MAIL: "
        .$row_user['email']." - TIPO: "
        .$row_user['tipo']."</li>";
    }
    echo "</ul>";
}else{
    echo "<ul class='list-group'><li class='list-group-item'>Nenhum usuário encontrado...</li></ul>";
}
?>