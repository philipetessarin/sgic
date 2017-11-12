<?php

require_once('banco-documento.php');
require_once ('banco-usuario.php');
require_once('logica-usuario.php');
//$usuarios = listaUsuarios($conexao);
?>

<table class="bordered">

    <thead>
    <tr>
        <th>Número Documento</th>
        <th>Remetente</th>
        <th>Destinatário</th>
        <th>Data / Hora</th>
        <th>Título</th>
    </tr>
    </thead>

    <?php

    $documentos = listaDocumentos($conexao);

    $enviado = usuarioLogado();

    foreach($documentos as $documento) :
        if($enviado == $documento['remetente_id']) {
            ?>

            <tbody>
            <tr>
                <td><?= $documento['id'] ?></td>
                <td><?= usuarioLogado() ?></td>
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
        }
        endforeach;
    ?>
</table>




