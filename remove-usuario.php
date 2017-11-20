<?php
    require_once('adm-cabecalho.php');
    require_once('banco-usuario.php');
    require_once('logica-usuario.php');

    $id = $_POST['id'];
    removeUsuario($conexao, $id);
    header("Location: adm-principal.php");
    die();
?>



