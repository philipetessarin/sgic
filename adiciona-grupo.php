<?php
    require_once('adm-cabecalho.php');
    require_once('banco-grupo.php');
    require_once('logica-usuario.php');


    verificaUsuario();

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        $checarGrupo = "select * from grupos where nome = '$_POST[nome]'";
        $resultadoGrupo = mysqli_query($conexao, $checarGrupo);
        $data = mysqli_fetch_array($resultadoGrupo, MYSQLI_NUM);

        if($data[0] > 1) {?>
            <p class="center red-text">O Grupo <?= $nome; ?> já existe.</p>
            <?php
            header('refresh: 1; url= "cadastro.php#criarGrupo"');
            die();
        } else {

            insereGrupo($conexao, $nome, $descricao);

            if (!empty($nome) && !empty($descricao)) {
                ?>
                <p class="center green-text">Grupo <?= $nome; ?> adicionado com sucesso!</p>
                <?php
                header('refresh: 1; url= "adm-principal.php#grupos"');
                die();
            } else {
                $msg = mysqli_error($conexao);
                ?>
                <p class="center red-text">Grupo <?= $nome; ?> não foi adicionado. Preencha os campos</p>
                <?php
                header('refresh: 1; url= "cadastro.php#criarGrupo"');
                die();
            }

        }
?>


<?php
    require_once('rodape.php');
?>












