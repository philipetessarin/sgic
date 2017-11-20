<?php
    require_once('adm-cabecalho.php');
    require_once('banco-usuario.php');
    require_once('banco-grupo.php');
    require_once('logica-usuario.php');

    verificaUsuario();

        $nome = $_POST['nome'];
        $setor = $_POST['setor'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $grupo_id = $_POST['grupo_id'];


        $checarEmail = "select * from usuarios where email = '$_POST[email]'";
        $resultadoEmail = mysqli_query($conexao, $checarEmail);
        $data = mysqli_fetch_array($resultadoEmail, MYSQLI_NUM);

        if($data[0] > 1) {?>
            <p class="center red-text">O Usuário <?= $nome; ?> já existe. Insira outro nome.</p>
            <?php
                header('refresh: 1; url= "cadastro.php#criarUsuario"');
                die();
        } else {

            insereUsuario($conexao, $nome, $setor, $email, $senha, $grupo_id);

            if (!empty($nome) && !empty($setor) && !empty($email) && !empty($senha) && !empty($grupo_id)) {
                ?>
                <p class="center green-text">Usuário <?= $nome; ?> adicionado com sucesso!</p>
                <?php
                header('refresh: 1; url= "adm-principal.php#usuarios"');
                die();
            } else {
                $msg = mysqli_error($conexao);
                ?>
                <p class="center red-text">Usuário <?= $nome; ?> não foi adicionado.</p>
                <?php
                header('refresh: 1; url= "cadastro.php#criarUsuario"');
                die();
            }
        }
?>


<?php
    require_once('rodape.php');
?>
