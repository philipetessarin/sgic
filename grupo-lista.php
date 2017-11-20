<?php
    require_once('banco-grupo.php');
    require_once ('paginacao-grupo-comeco.php');
    $grupos = listaGrupos($conexao);
?>
<nav>
    <div class="nav-wrapper #424242 grey darken-3">
        <form method="post" action="pesquisar-grupo.php">
            <div class="input-field">
                <input id="search" type="search" name="pesquisar" placeholder="Digite o nome do grupo" required>
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



