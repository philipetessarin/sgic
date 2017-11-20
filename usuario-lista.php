<?php

    require_once('banco-usuario.php');
    require_once('logica-usuario.php');
    require_once('paginacao-usuario-comeco.php');


?>
<nav>
    <div class="nav-wrapper #424242 grey darken-3">
        <form method="post" action="pesquisar-usuario.php">
            <div class="input-field">
                <input id="search" type="search" name="pesquisar" placeholder="Digite o nome do usuário" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </div>
</nav>
<br><br>
<div class="row container">
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
        while($usuario = mysqli_fetch_assoc($resultado_usuarios)){
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
        <td>
            <form action="remove-usuario.php" method="post">
                <input type="hidden" name="id" value="<?=$usuario['id']?>">
                <button class="btn red">remover</button>
            </form>
        </td>
    </tr>
    </tbody>


    <?php
        }
        endforeach;
    ?>
</table>
</div>

<?php
    require_once ('paginacao-usuario-fim.php');
?>





