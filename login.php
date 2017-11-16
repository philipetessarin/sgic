<?php
    require_once('banco-usuario.php');
    require_once('logica-usuario.php');

    $usuario = buscaUsuarioLogin($conexao, $_POST['email'], $_POST['senha']);
   logaUsuario($usuario['email']);
    if($usuario == null) {
        $_SESSION['danger'] = "<p class='center red-text'>Usuário ou senha inválidos</p>";
        header("Location: index.php");
    }elseif($usuario['grupo_id'] == 26 ) {
        logaUsuario($usuario['nome']);
        header("Location: adm-principal.php");
    }else {
        logaUsuario($usuario['nome']);
        header("Location: usuario-principal.php");
    }
?>