<?php
    require_once('adm-cabecalho.php');
    require_once('banco-usuario.php');
    //include ('banco-grupo.php');
?>

<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$setor = $_POST['setor'];
$grupo_id = $_POST['grupo_id'];


if(alteraUsuario($conexao, $id, $nome, $setor, $email, $senha, $grupo_id)) { ?>
    <p class="green-text center">O usuário <?=$nome?> foi alterado.</p>

<?php
    header( 'refresh: 2; url= "adm-principal.php"' );
    die();
} else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="red-text center">O usuário <?=$nome?> não foi alterado: <?= $msg?></p>
    <?php
}
?>

<?php
    require_once('rodape.php');
?>












