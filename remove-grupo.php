<?php
    require_once('adm-cabecalho.php');
    require_once('banco-grupo.php');

    $id = $_POST['id'];
    removeGrupo($conexao, $id);
    header("Location: adm-principal.php#grupos");
    die();
?>


