<?php
    require_once('banco-grupo.php');
    require_once ('paginacao-grupo-comeco.php');
    $grupos = listaGrupos($conexao);
?>

<div class="row">
<table class="bordered">

    <thead>
    <tr>
        <th>Nome</th>
        <th>Descrição</th>
    </tr>
    </thead>

    <?php
        foreach($grupos as $grupo) :
        while($grupo = mysqli_fetch_assoc($resultado_grupos)){
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
        }
        endforeach;
    ?>
</table>
</div>
<?php require_once ('paginacao-grupo-fim.php'); ?>



