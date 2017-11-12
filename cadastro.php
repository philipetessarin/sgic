<?php
    require_once('cadastro-cabecalho.php');
    require_once('banco-usuario.php');
    require_once('banco-grupo.php');
    require_once('logica-usuario.php');

    verificaUsuario();
?>

<!--Abas de navegação-->
            <ul class="tabs tabs-transparent" style="width:20em;" >
                <li class="tab"><a  class="active" href="#criarUsuario">CRIAR USUÁRIO</a></li>
                <li class="tab"><a href="#criarGrupo">CRIAR GRUPO</a></li>
            </ul>
        </div>
    </div>
</nav>
<nav>
    <div class="nav-wrapper #424242 grey darken-3 con">
        <form>
            <div class="input-field">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
            </div>
        </form>
    </div>
</nav>
<br><br>

<div id="criarUsuario" class="col s12 container">
 <?php require_once('usuario-formulario.php');?>
</div>
<div id="criarGrupo" class="col s12 container">
    <?php require_once('grupo-formulario.php'); ?>
</div>


<?php require_once('rodape.php');?>

