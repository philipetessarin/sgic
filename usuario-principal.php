<?php
require_once('usuario-cabecalho.php');

?>

    <div id="recebidos" class="col s12 container">
       <?php require_once('documento-recebido-lista.php')?>
    </div>
    <div id="enviados" class="col s12 container">
        <?php require_once('documento-enviado-lista.php')?>
    </div>
    <div id="autorizados" class="col s12 container">
        Teste 3
    </div>
    <div id="rascunhos" class="col s12 container">
        <?php require_once('documento-rascunho-lista.php'); ?>
    </div>








<?php require_once('rodape.php'); ?>