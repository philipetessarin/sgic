
    <table class="bordered container">

        <thead>
        <tr>
            <th>Nome</th>
        </tr>
        </thead>

        <?php

        while($grupo = mysqli_fetch_array($resultado_groups)){
            ?>

                <tbody>
                <tr>
                    <td><?= $grupo['nome'] ?></td>
                    <td>
                        <form action="alteracao.php#alterarGrupo" method="post">
                            <input type="hidden" name="id" value="<?=$grupo['id']?>">
                            <button class="btn blue">Alterar</button>
                        </form>
                    </td>
                    <!--<td>
                        <form action="visualizacao-documento.php#visualizarDocumento" method="post">
                            <input type="hidden" name="id" value="<?= $documento['id'] ?>">
                            <button class="btn blue">Visualizar</button>
                        </form>
                    </td>-->
                </tr>
                </tbody>

                <?php
        }
        ?>
    </table>