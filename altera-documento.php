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


if(isset($_POST['submit'])) {

    $btnStatus = 0;


    if (alteraDocumento($conexao, $id, $remetente, $destinatario, $data, $titulo, $mensagem, $btnStatus)) { ?>

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
}elseif($_POST['save']) {

    $btnStatus = 1;

    if (alteraDocumento($conexao, $id, $remetente, $destinatario, $data, $titulo, $mensagem, $btnStatus)) { ?>

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
}
?>

<?php
    require_once('rodape.php');
?>












