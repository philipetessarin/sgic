<?php
    require_once('adm-cabecalho.php');
    //include('banco-usuario.php');
    require_once('banco-grupo.php');
    require_once('logica-usuario.php');


    verificaUsuario();

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

    insereGrupo($conexao, $nome, $descricao);

    if(!empty($nome) && !empty($descricao)) {
        ?>
        <p class="center green-text">Grupo <?=$nome;?> adicionado com sucesso!</p>
        <?php
        header( 'refresh: 2; url= "adm-principal.php#grupos"' );
        die();
    } else {
            $msg = mysqli_error($conexao);
        ?>
        <p class="center red-text">Grupo <?=$nome;?> não foi adicionado. Preencha os campos</p>
        <?php
        header( 'refresh: 2; url= "cadastro.php#criarGrupo"' );
        die();
    }
?>


<?php
    require_once('rodape.php');
?>











