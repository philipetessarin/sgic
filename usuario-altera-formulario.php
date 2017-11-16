<?php
    require_once('banco-usuario.php');
    require_once('banco-grupo.php');

    $id = $_POST['id'];
    $usuario = buscaUsuario($conexao, $id);
    $grupos = listaGrupos($conexao);
?>

<h4 class="center">Alterando usuário</h4>
<div class="row">
    <form action="altera-usuario.php" method="post" class="col s12">
        <input type="hidden" name="id" value="<?=$usuario['id']?>">

        <?php require_once('usuario-formulario-base.php'); ?>

        <div class="row center">
            <a href="adm-principal.php" class="btn #ff6f00 amber darken-4">Cancelar</a>
            <button class="btn #ff6f00 amber darken-4" type="submit">Alterar</button>
        </div>


    </form>
</div>





