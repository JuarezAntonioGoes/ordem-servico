<?php

// Conexão
require_once '../php_action/db_connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM adicionar_servico WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);

$dados = mysqli_fetch_array($resultado);

require_once __DIR__ . '/vendor/autoload.php';

$html = '
<h1 style="text-align: center;">ENTRADA DO PRODUTO: </h1>
<br><br>
<p style"text-align: justified;">NOME: ............................................................................................... ' . $dados['nome'] . '</p>
<p>CPF:  ................................................................................................... ' . $dados['cpf'] . '</p>
<p>Data do cadastro:  ............................................................................... ' . $dados['data'] . '</p>
<p>Hora do cadastro:  ............................................................................... ' . $dados['hora'] . '</p>
<p>Tecnico responsável pelo conserto:  .................................................... ' . $dados['tecnico'] . '</p>
<p>Nº Série:  .............................................................................................. ' . $dados['serie'] . '</p>
<p>ID do produto:  ...................................................................................... ' . $dados['id'] . '</p>

<p>---------------------------------------------------------------------- AVISO ---------------------------------------------------------------------- </p>
<p> USE O ID PARA FAZER O ACOMPANHA ACOMPANHAMENTO DO CONSERTO EM NOSSO SITE "jobmanager.com.br", OU LEIA O QR CODE </p>


<h1 style="text-align: center;"><img style="text-align: center; margin-top:0;" src="../images_qr/'.$id.'.png"  alt="" ></h1>

';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
