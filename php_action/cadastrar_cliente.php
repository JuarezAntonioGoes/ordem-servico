<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input)
{
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if (isset($_POST['btn-add'])) :

	$nome = clear($_POST['nome']);
	$cpf = clear($_POST['cpf']);
	$celular = clear($_POST['telefone']);
	$cidade = clear($_POST['cidade']);
	$endereco = clear($_POST['endereco']);
	$bairro = clear($_POST['bairro']);
	$numero_domicilio = clear($_POST['numero_residencia']);


	$sql = "INSERT INTO adicionar_cliente (nome, cpf, telefone, cidade, endereco, bairro, numero_domicilio) VALUES ('$nome', '$cpf', '$celular', '$cidade', '$endereco', '$bairro', '$numero_domicilio')";


	if (mysqli_query($connect, $sql)) :
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../gerenciar_cliente/index.php');
	else :
		/* $_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../includes'); */

	endif;

endif;
