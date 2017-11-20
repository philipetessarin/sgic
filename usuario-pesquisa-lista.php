
    <table class="bordered container">

        <thead>
        <tr>
            <th>Nome</th>
        </tr>
        </thead>

        <?php

        while($usuario = mysqli_fetch_array($resultado_users)){
            ?>

                <tbody>
                <tr>
                    <td><?= $usuario['nome'] ?></td>
                    <td>
                        <form action="alteracao.php#alterarUsuario" method="post">
                            <input type="hidden" name="id" value="<?=$usuario['id']?>">
                            <button class="btn blue">Alterar</button>
                        </form>
                    </td>
                </tr>
                </tbody>

                <?php
        }
        ?>
    </table>