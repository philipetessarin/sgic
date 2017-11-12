<?php
    require_once ('doc-cabecalho.php');
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
</div>
<div id="requisicao" class="col s12 container">Test 2</div>
<div id="manutencao" class="col s12 container">
    <?php require_once ('documento-formulario_2.php'); ?>
</div>
<div id="pbranco" class="col s12 container">
    <?php require_once ('documento-formulario.php'); ?>
</div>


<?php require_once ('rodape.php');?>