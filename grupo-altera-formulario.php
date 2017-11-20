<?php

    $id = $_POST['id'];
    $grupo = buscaGrupo($conexao, $id);
    $grupos = listaGrupos($conexao);
?>

<h4 class="center">Alterando Grupo</h4>
<div class="row">
    <form action="altera-grupo.php" method="post" class="col s12">
        <input type="hidden" name="id" value="<?=$grupo['id']?>">

        <?php include('grupo-formulario-base.php');?>

        <div class="row center">
            <a href="adm-principal.php#grupos" class="btn #ff6f00 amber darken-4">Cancelar</a>
            <button class="btn #ff6f00 amber darken-4" type="submit">Alterar</button>
        </div>


    </form>
</div>





