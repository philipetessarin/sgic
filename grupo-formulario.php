<?php
    //include ('conecta.php');
    //include ('logica-usuario.php');

    //verificaUsuario();
//include('banco-grupo.php');

//$grupos = listaGrupos($conexao);

    $grupo = array("nome" => "", "descricao" => "");
?>

<h4 class="center">Cadastro de grupos</h4>
<div class="row">
    <form action="adiciona-grupo.php" method="post" class="col s12">

        <?php require_once('grupo-formulario-base.php'); ?>

        <div class="row center">
            <a href="adm-principal.php#grupos" class="btn #ff6f00 amber darken-4">Cancelar</a>
            <button class="btn btn-primary #ff6f00 amber darken-4" type="submit">Cadastrar</button>
        </div>


    </form>
</div>





