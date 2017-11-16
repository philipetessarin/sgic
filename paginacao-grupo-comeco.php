<?php
 require_once ('banco-grupo.php');

$pagina = isset($_GET['pagina'])? $_GET['pagina'] : 1 ;

$result_grupo = "select * from grupos order by nome";
$resultado_grupo = mysqli_query($conexao, $result_grupo);

$total_grupos = mysqli_num_rows($resultado_usuario);

$qtdPag = 10;

$num_pagina = ceil($total_usuarios/$qtdPag);

$inicio = ($qtdPag*$pagina) - $qtdPag;

$result_grupos = "select * from grupos order by nome limit $inicio, $qtdPag";
$resultado_grupos = mysqli_query($conexao, $result_grupos);
$total_grupos = mysqli_num_rows($resultado_grupos);

?>


