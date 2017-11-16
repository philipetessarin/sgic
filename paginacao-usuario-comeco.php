<?php
 require_once ('banco-usuario.php');

$pagina = isset($_GET['pagina'])? $_GET['pagina'] : 1 ;

$result_usuario = "select u.*, g.nome as grupo_nome from usuarios as u join grupos as g on u.grupo_id = g.id order by grupo_nome, nome";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

$total_usuarios = mysqli_num_rows($resultado_usuario);

$qtdPag = 5;

$num_pagina = ceil($total_usuarios/$qtdPag);

$inicio = ($qtdPag*$pagina) - $qtdPag;

$result_usuarios = "select u.*, g.nome as grupo_nome from usuarios as u join grupos as g on u.grupo_id = g.id order by grupo_nome, nome limit $inicio, $qtdPag";
$resultado_usuarios = mysqli_query($conexao, $result_usuarios);
$total_usuarios = mysqli_num_rows($resultado_usuarios);

?>


