<?php
session_start();
include('conexao.php');

if(empty($_POST['user']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($mysqli, $_POST['user']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "select nome from user where nome = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['user'] = $usuario;
	header('Location: form.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
?>