<?php
    require_once('adm-cabecalho.php');
    require_once('banco-usuario.php');
    require_once('logica-usuario.php');

    $id = $_POST['id'];
    removeUsuario($conexao, $id);
    $_SESSION['success'] = "<p class='center green-text'>Usuário apagado com sucesso.</p>";
    header("Location: adm-principal.php");
    die();
?>



