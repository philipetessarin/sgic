<?php

require_once('banco-documento.php');
require_once ('banco-usuario.php');
require_once('logica-usuario.php');
require_once ('paginacao-rascunho-comeco.php');
require_once ('botao.php');
//$usuarios = listaUsuarios($conexao);
session_start();
$name = $_SESSION['salvar'];

?>

<table class="bordered">

    <thead>
    <tr>
        <th>Número Documento</th>
        <th>Remetente</th>
        <th>Destinatário</th>
        <th>Data</th>
        <th>Título</th>
    </tr>
    </thead>

    <?php


    $documentos = listaDocumentos($conexao);
    foreach($documentos as $documento) :
    //while($documento = mysqli_fetch_assoc($resultado_enviados)){
     if(usuarioLogado() == $documento['remetente'] and $documento['btn_status'] == 1) {
         ?>

         <tbody>
         <tr>
             <td><?= $documento['id'] ?></td>
             <td><?=usuarioLogado()?></td>
             <td>
                 <?= $documento['destinatario_nome'] ?>
             </td>
             <td><?= $documento['data_atual'] ?></td>
             <td><?= $documento['titulo'] ?></td>
             <td>
                 <form action="alteracao-documento.php#alterarDocumento" method="post">
                     <input type="hidden" name="id" value="<?= $documento['id'] ?>">
                     <button class="btn blue">Editar</button>
                 </form>
             <td>
                 <form action="remove-documento.php" method="post">
                     <input type="hidden" name="id" value="<?= $documento['id'] ?>">
                     <button class="btn red">remover</button>
                 </form>
             </td>
         </tr>
         </tbody>


         <?php
        //}
     }
        endforeach;
    ?>
</table>

<?php require_once ('paginacao-rascunho-fim.php'); ?>




