<?php
    require_once('adm-cabecalho.php');
    //include ('banco-usuario.php');
    require_once('banco-grupo.php');
?>

<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

if(alteraGrupo($conexao, $id, $nome, $descricao)) { ?>
    <p class="green-text center">O grupo <?=$nome?> foi alterado.</p>

<?php
    header( 'refresh: 2; url= "adm-principal.php#grupos"' );
    die();
} else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="red-text center">O grupo <?=$nome?> não foi alterado: <?= $msg?></p>
    <?php
    header( 'refresh: 2; url= "alteracao.php#alterarGrupo"' );
    die();
}
?>


<?php
    require_once('rodape.php');
?>












