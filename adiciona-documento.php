<?php
require_once('doc-cabecalho.php');
require_once ('banco-documento.php');
require_once('banco-usuario.php');
require_once('banco-grupo.php');
require_once('logica-usuario.php');

verificaUsuario();


$remetente = $_POST['remetente'];
$destinatario = $_POST['destinatario_id'];
$data = $_POST['data_atual'];
$titulo = $_POST['titulo'];
$mensagem = $_POST['mensagem'];


if(isset($_POST['submit']))
{
    $btnStatus = 0;

    if(!empty($remetente) && !empty($destinatario) && !empty($data) && !empty($titulo) && !empty($mensagem)) {
        insereDocumento($conexao, $remetente, $destinatario, $data, $titulo, $mensagem, $btnStatus);
        ?>
        <p class="center green-text">Documento <?=$titulo;?> adicionado com sucesso!</p>
        <?php
        header( 'refresh: 1; url= "usuario-principal.php#recebidos"' );
        die();
    } else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="center red-text">Documento <?=$titulo;?> não foi adicionado.</p>
        <?php
        header( 'refresh: 1; url= "documento.php#agendamento"' );
        die();
    }
} elseif($_POST['save']) {

    $btnStatus = 1;

    if(!empty($remetente) && !empty($destinatario) && !empty($data) && !empty($titulo) && !empty($mensagem)) {
        insereDocumento($conexao, $remetente, $destinatario, $data, $titulo, $mensagem, $btnStatus);
        ?>
        <p class="center green-text">Documento <?=$titulo;?> salvo com sucesso!</p>
        <?php
        header( 'refresh: 2; url= "usuario-principal.php#recebidos"' );
        die();
    } else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="center red-text">Documento <?=$titulo;?> não foi salvo.</p>
        <?php
        header( 'refresh: 2; url= "documento.php#agendamento"' );
        die();
    }
}


?>


<?php
require_once('rodape.php');
?>
