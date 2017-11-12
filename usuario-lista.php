<?php

    require_once('banco-usuario.php');
    require_once('logica-usuario.php');
    //$usuarios = listaUsuarios($conexao);
?>

<table class="bordered">

    <thead>
    <tr>
        <th>Nome</th>
        <th>Setor</th>
        <th>Email</th>
        <th>Grupo</th>
    </tr>
    </thead>

    <?php
        $usuarios = listaUsuarios($conexao);
        foreach($usuarios as $usuario) :
    ?>

    <tbody>
    <tr>
        <td><?=$usuario['nome'];?></td>
        <td><?=$usuario['setor'];?></td>
        <td><?=$usuario['email']?></td>
        <td><?=$usuario['grupo_nome']?></td>
        <td>
            <form action="alteracao.php#alterarUsuario" method="post">
                <input type="hidden" name="id" value="<?=$usuario['id']?>">
                <button class="btn blue">Alterar</button>
            </form>
            <!--<a class="btn blue" href="usuario-altera-formulario.php">alterar</a></td>-->
        <td>
            <form action="remove-usuario.php" method="post">
                <input type="hidden" name="id" value="<?=$usuario['id']?>">
                <button class="btn red">remover</button>
            </form>
        </td>
    </tr>
    </tbody>


    <?php
        endforeach;
    ?>
</table>




