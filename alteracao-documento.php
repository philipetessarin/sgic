<?php
require_once('doc-cabecalho.php');

?>

<!--Abas de navegação-->
            <ul class="tabs tabs-transparent" style="width:15em;" >
                <li class="tab"><a  class="active" href="#alterarDocumento">EDITAR DOCUMENTO</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br>

<div id="alterarDocumento" class="col s12 container">
    <?php require_once('documento-altera-formulario.php');?>
</div>


<?php require_once('rodape.php');?>

