<?php
 require_once ('banco-documento.php');

$pagina = isset($_GET['pagina'])? $_GET['pagina'] : 1 ;

$result_recebido = "select d.*,u.nome as destinatario_nome  from documentos as d join usuarios as u on u.id = d.destinatario_id";
$resultado_recebido = mysqli_query($conexao, $result_recebido);

$total_recebidos = mysqli_num_rows($resultado_recebido);

$qtdPag = 5;

$num_pagina = ceil($total_recebidos/$qtdPag);

$inicio = ($qtdPag*$pagina) - $qtdPag;

$result_recebidos = "select d.*,u.nome as destinatario_nome  from documentos as d join usuarios as u on u.id = d.destinatario_id limit $inicio, $qtdPag";
$resultado_recebidos = mysqli_query($conexao, $result_recebidos);
$total_recebidos = mysqli_num_rows($resultado_recebidos);

?>


