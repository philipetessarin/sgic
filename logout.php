<?php
    require_once('logica-usuario.php');

    logout();
    $_SESSION['success'] = "<p class='center green-text'>Deslogado com sucesso</p>";
    header("Location: index.php");
    die();
?>