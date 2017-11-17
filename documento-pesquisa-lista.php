
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

        while($documento = mysqli_fetch_array($resultado_pesquisas)){
            if((usuarioLogado() and $documento['btn_status'] == 0) or (usuarioLogado() and $documento['btn_status'] == 1)) {
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
                </tr>
                </tbody>

                <?php
            }
        }

        ?>
    </table>