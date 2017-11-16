<?php

    require_once('banco-documento.php');
    require_once ('banco-usuario.php');
    require_once('logica-usuario.php');
    require_once ('paginacao-enviado-comeco.php');

?>

<table class="bordered">

    <thead>
    <tr>
        <th>Número Documento</th>
        <th>Destinatário</th>
        <th>Data</th>
        <th>Título</th>
    </tr>
    </thead>

    <?php


    $documentos = listaDocumentos($conexao);
    foreach($documentos as $documento) :
       // while($documento = mysqli_fetch_assoc($resultado_enviados)){
        if(usuarioLogado() == $documento['remetente']) {
            ?>

            <tbody>
            <tr>
                <td><?= $documento['id'] ?></td>
                <td>
                    <?= $documento['destinatario_nome'] ?>
                </td>
                <td><?= $documento['data_atual'] ?></td>
                <td><?= $documento['titulo'] ?></td>
                <td>
                    <form action="visualizacao-documento.php#visualizarDocumento" method="post">
                        <input type="hidden" name="id" value="<?= $documento['id'] ?>">
                        <button class="btn blue">Visualizar</button>
                    </form>
                <td>
                    <form action="remove-documento.php" method="post">
                        <input type="hidden" name="executado" value="<?= $documento['id'] ?>">
                        <button class="btn red">EXECUTADO</button>
                    </form>
                </td>
            </tr>
            </tbody>


            <?php
         //   }
        }
    endforeach;
    ?>
</table>

<?php require_once ('paginacao-enviado-fim.php') ?>




