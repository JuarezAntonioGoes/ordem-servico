<?php
// Sessão
session_start();

// Verificação
if (($_SESSION['logado']) == 0) :
	header('Location: ../login/index.php');
endif;

require_once '../php_action/db_connect.php';

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM tela_login WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
if (mysqli_num_rows($resultado) > 0) {

	while ($dados = mysqli_fetch_array($resultado)) {
		$nomeUser = $dados['nome'];
		$tipoUser = $dados['tipo'];
		$userName = $dados['login'];
	}
}


