<?php
require_once('usuario-cabecalho.php');
require_once('banco-documento.php');
require_once('logica-usuario.php');

$id = $_POST['id'];
removeDocumento($conexao, $id);
$_SESSION['success'] = "<p class='center green-text'>Documento apagado com sucesso.</p>";
header("Location: usuario-principal.php#rascunhos");
die();
?>

z

