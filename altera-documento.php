<?php
    require_once('doc-cabecalho.php');
    require_once('banco-documento.php');
?>

<?php
$id = $_POST['id'];
$remetente = $_POST['remetente'];
$destinatario = $_POST['destinatario_id'];
$data = $_POST['data_atual'];
$titulo = $_POST['titulo'];
$mensagem = $_POST['mensagem'];
$autorizacao= $_POST['autorizacao_id'];


if(isset($_POST['submit'])) {

    $btnStatus = 0;


    if (alteraDocumento($conexao, $id, $remetente, $destinatario, $data, $titulo, $mensagem, $btnStatus, $autorizacao)) { ?>

        <p class="green-text center">O Documento <?= $titulo ?> foi enviado com sucesso.</p>

        <?php
        header('refresh: 1; url= "usuario-principal.php"');
        die();
    } else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="red-text center">O Documento <?= $titulo ?> não foi enviado: <?= $msg ?></p>
        <?php
    }
}elseif(isset($_POST['save'])) {

    $btnStatus = 1;

    if (alteraDocumento($conexao, $id, $remetente, $destinatario, $data, $titulo, $mensagem, $btnStatus, $autorizacao)) { ?>

        <p class="green-text center">O Documento <?= $titulo ?> foi alterado.</p>

        <?php
        header('refresh: 1; url= "usuario-principal.php"');
        die();
    } else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="red-text center">O Documento <?= $titulo ?> não foi alterado: <?= $msg ?></p>
        <?php
    }
} elseif(isset($_POST['autorize'])){

    $btnStatus = 2;

    if(!empty($remetente) && !empty($destinatario) && !empty($data) && !empty($titulo) && !empty($mensagem)) {
        insereDocumento($conexao, $remetente, $destinatario, $data, $titulo, $mensagem, $btnStatus, $autorizacao);
        ?>
        <p class="center green-text">Documento <?=$titulo;?> enviado para autorização!</p>
        <?php
        header( 'refresh: 2; url= "usuario-principal.php#recebidos"' );
        die();
    } else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="center red-text">Documento <?=$titulo;?> não foi enviado para autorização.</p>
        <?php
        header( 'refresh: 2; url= "documento.php#agendamento"' );
        die();
    }


}
?>

<?php
    require_once('rodape.php');
?>












