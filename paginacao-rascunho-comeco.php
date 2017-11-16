<?php
 require_once ('banco-documento.php');

$pagina = isset($_GET['pagina'])? $_GET['pagina'] : 1 ;

$result_rascunho = "select d.*,u.nome as destinatario_nome  from documentos as d join usuarios as u on u.id = d.destinatario_id";
$resultado_rascunho = mysqli_query($conexao, $result_rascunho);

$total_rascunhos = mysqli_num_rows($resultado_rascunho);

$qtdPag = 5;

$num_pagina = ceil($total_rascunhos/$qtdPag);

$inicio = ($qtdPag*$pagina) - $qtdPag;

$result_rascunhos = "select d.*,u.nome as destinatario_nome  from documentos as d join usuarios as u on u.id = d.destinatario_id limit $inicio, $qtdPag";
$resultado_rascunhos = mysqli_query($conexao, $result_rascunhos);
$total_rascunhos = mysqli_num_rows($resultado_rascunhos);

?>


