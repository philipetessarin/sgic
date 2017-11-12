<?php
require_once('doc-cabecalho.php');
require_once ('banco-documento.php');
require_once('banco-usuario.php');
require_once('banco-grupo.php');
require_once('logica-usuario.php');

verificaUsuario();


$remetente = $_POST['remetente_id'];
$destinatario = $_POST['destinatario_id'];
$data = $_POST['data_atual'];
$titulo = $_POST['titulo'];
$mensagem = $_POST['mensagem'];


insereDocumento($conexao, $remetente, $destinatario, $data, $titulo, $mensagem);

if(!empty($remetente) && !empty($destinatario) && !empty($data) && !empty($titulo)) {
    ?>
    <p class="center green-text">Documento <?=$titulo;?> adicionado com sucesso!</p>
    <?php
    header( 'refresh: 2; url= "usuario-cabecalho.php#recebidos"' );
    die();
} else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="center red-text">Documento <?=$titulo;?> não foi adicionado.</p>
    <?php
    header( 'refresh: 2; url= "documento.php#agendamento"' );
    die();
}
?>


<?php
require_once('rodape.php');
?>
