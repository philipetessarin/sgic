<?php
    require_once('banco-grupo.php');
    $grupos = listaGrupos($conexao);
?>

<table class="bordered">

    <thead>
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
    </tr>
    </thead>

    <?php
        foreach($grupos as $grupo) :
    ?>

    <tbody>
    <tr>
        <td><?=$grupo['nome'];?></td>
        <td><?=$grupo['descricao'];?></td>
        <td>
            <form action="alteracao.php#alterarGrupo" method="post">
                <input type="hidden" name="id" value="<?=$grupo['id']?>">
                <button class="btn blue">Alterar</button>
            </form>
            <!--<a class="btn blue" href="usuario-altera-formulario.php">alterar</a></td>-->
        <td>
            <form action="remove-grupo.php" method="post">
                <input type="hidden" name="id" value="<?=$grupo['id']?>">
                <button class="btn red">remover</button>
            </form>
        </td>
    </tr>
    </tbody>


    <?php
        endforeach;
    ?>
</table>




