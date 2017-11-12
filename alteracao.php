<?php
    require_once('cadastro-cabecalho.php');

?>

<!--Abas de navegação-->
            <ul class="tabs tabs-transparent" style="width:25em;" >
                <li class="tab"><a  class="active" href="#alterarUsuario">ALTERAR USUÁRIO</a></li>
                <li class="tab"><a href="#alterarGrupo">ALTERAR GRUPO</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br>

<div id="alterarUsuario" class="col s12 container">
    <?php require_once('usuario-altera-formulario.php');?>
</div>
<div id="alterarGrupo" class="col s12 container">
    <?php require_once('grupo-altera-formulario.php'); ?>
</div>


<?php require_once('rodape.php');?>

