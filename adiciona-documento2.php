<?php
require_once('doc-cabecalho.php');
require_once ('banco-documento.php');
require_once('banco-usuario.php');
require_once('banco-grupo.php');
require_once('logica-usuario.php');


//PHPMailer
//use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;


require_once ('PHPMailer/src/Exception.php');
require_once ('PHPMailer/src/PHPMailer.php');
require_once ('PHPMailer/src/SMTP.php');

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

        echo "$destinatario<br>";

        $emails = listaEmails($conexao);
        foreach($emails as $email) :
            if($destinatario  == $email['id']){
                echo "$email";
                $email = $email['destinatario_email'];

                echo "$destinatario";
                echo "$email";


                $Mailer = new PHPMailer();

                //Define que será usado SMTP
                $Mailer->IsSMTP();

                //Enviar e-mail em HTML
                $Mailer->isHTML(true);

                //Aceitar carasteres especiais
                $Mailer->Charset = 'UTF-8';

                //Configurações
                $Mailer->SMTPAuth = true;
                $Mailer->SMTPSecure = 'ssl';

                //nome do servidor
                $Mailer->Host = 'smtp.gmail.com';

                //Porta de saida de e-mail
                $Mailer->Port = 465;

                //Dados do e-mail de saida - autenticação
                $Mailer->Username = 'adm.sgic@gmail.com';
                $Mailer->Password = '2018Ulbr@3ad';

                //E-mail remetente (deve ser o mesmo de quem fez a autenticação)
                $Mailer->From = 'philipetessarin@gmail.com';

                //Nome do Remetente
                $Mailer->FromName = 'Philipe Tessarin';

                //Assunto da mensagem
                $Mailer->Subject = 'Titulo - Recuperar Senha';

                //Corpo da Mensagem
                $Mailer->Body = 'Conteudo do E-mail';

                //Corpo da mensagem em texto
                $Mailer->AltBody = 'conteudo do E-mail em texto';

                //Destinatario
                $Mailer->AddAddress($email);



                if($Mailer->Send()){
                    echo "E-mail enviado com sucesso";
                }else{
                    echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
                }

            }

        endforeach;

        ?>
        <p class="center green-text">Documento <?=$titulo;?> adicionado com sucesso!</p>
        <?php
        //header( 'refresh: 1; url= "usuario-principal.php#recebidos"' );
        //die();
    } else {
        $msg = mysqli_error($conexao);
        ?>
        <p class="center red-text">Documento <?=$titulo;?> não foi adicionado.</p>
        <?php
        //header( 'refresh: 1; url= "documento.php#agendamento"' );
        //die();
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
