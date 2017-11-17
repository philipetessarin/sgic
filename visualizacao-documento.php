<?php
require_once('doc-cabecalho.php');

?>

<!--Abas de navegação-->
            <ul class="tabs tabs-transparent" style="width:20em;" >
                <li class="tab"><a  class="active" href="#visualizarDocumento">VISUALIZAÇÃO DO DOCUMENTO</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br>

<div id="visualizarDocumento" class="col s12 container">
    <?php require_once('documento-visualiza-formulario.php');?>
</div>


<?php require_once('rodape.php');?>

