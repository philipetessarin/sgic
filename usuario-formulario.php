<?php

    $usuario = array("nome" => "", "grupo_id" => "", "email" => "", "setor" => "");
    $grupos = listaGrupos($conexao);
?>

        <h4 class="center">Cadastro de usuários</h4>
        <div class="row">
            <form action="adiciona-usuario.php" method="post" class="col s12">

                <?php  require_once ('usuario-formulario-base.php'); ?>

                <div class="row center">
                    <a href="adm-principal.php" class="btn #ff6f00 amber darken-4">Cancelar</a>
                    <button class="btn btn-primary #ff6f00 amber darken-4" type="submit">Cadastrar</button>
                </div>

            </form>
        </div>

