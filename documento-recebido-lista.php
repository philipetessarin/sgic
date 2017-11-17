<?php

require_once('banco-documento.php');
require_once ('banco-usuario.php');
require_once('logica-usuario.php');
require_once('paginacao-recebido-comeco.php');
?>

<table class="bordered">

    <thead>
    <tr>
        <th>Número Documento</th>
        <th>Remetente</th>
        <th>Data</th>
        <th>Título</th>
    </tr>
    </thead>

    <?php

    $documentos = listaDocumentos($conexao);

    $recebido = usuarioLogado();

    foreach($documentos as $documento) :
        //while($documento = mysqli_fetch_assoc($resultado_recebidos)){
        if($recebido == $documento['destinatario_nome'] and $documento['btn_status'] == 0) {
            ?>

            <tbody>
            <tr>
                <td><?= $documento['id'] ?></td>
                <td><?=$documento['remetente']?></td>
                <td><?= $documento['data_atual'] ?></td>
                <td><?= $documento['titulo'] ?></td>
                <td>
                    <form action="visualizacao-documento.php#visualizarDocumento" method="post">
                        <input type="hidden" name="id" value="<?= $documento['id'] ?>">
                        <button class="btn blue">Visualizar</button>
                    </form>
                </td>
                <!--<td>
                    <form action="remove-documento.php" method="post">
                        <input type="hidden" name="id" value="<?= $documento['id'] ?>">
                        <button class="btn red">remover</button>
                    </form>
                </td>-->
            </tr>
            </tbody>

            <?php
            //}
        }
        endforeach;
    ?>
</table>

<?php
    require_once('paginacao-recebido-fim.php');
?>




