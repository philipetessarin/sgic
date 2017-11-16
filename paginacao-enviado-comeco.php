<?php
 require_once ('banco-documento.php');

$pagina = isset($_GET['pagina'])? $_GET['pagina'] : 1 ;

$result_enviado = "select d.*,u.nome as destinatario_nome  from documentos as d join usuarios as u on u.id = d.destinatario_id";
$resultado_enviado = mysqli_query($conexao, $result_enviado);

$total_enviados = mysqli_num_rows($resultado_enviado);

$qtdPag = 5;

$num_pagina = ceil($total_enviados/$qtdPag);

$inicio = ($qtdPag*$pagina) - $qtdPag;

$result_enviados = "select d.*,u.nome as destinatario_nome  from documentos as d join usuarios as u on u.id = d.destinatario_id limit $inicio, $qtdPag";
$resultado_enviados = mysqli_query($conexao, $result_enviados);
$total_enviados = mysqli_num_rows($resultado_enviados);

?>


