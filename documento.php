<?php
    require_once ('doc-cabecalho.php');
    require_once ('logica-usuario.php');
    require_once ('banco-usuario.php');
    require_once ('banco-grupo.php');
    require_once ('banco-documento.php');

$usuarios = listaUsuarios($conexao);
?>

            <!--Abas de navegação-->
            <ul class="tabs tabs-transparent" style="width:40em;" >
                <li class="tab"><a  class="active" href="#agendamento">Agendamento</a></li>
                <li class="tab"><a href="#requisicao">Requisição</a></li>
                <li class="tab"><a href="#manutencao">Manutenção</a></li>
                <li class="tab"><a href="#pbranco">Página em Branco</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br>






<div id="agendamento" class="col s12 container">
    <?php require_once ('modelo-agendamento.php'); ?>
</div>
<div id="requisicao" class="col s12 container">
    <?php
        require_once ('modelo-requisicao.php');
    ?>
</div>
<div id="manutencao" class="col s12 container">
    <?php
        require_once ('modelo-manutencao.php');
    ?>
</div>
<div id="pbranco" class="col s12 container">
    <?php
        require_once('documento-formulario.php');
    ?>
</div>


<?php require_once ('rodape.php');?>