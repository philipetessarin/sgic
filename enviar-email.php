<?php
require 'PHPMailer/PHPMailerAutoload.php';

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
$Mailer->Username = 'admin.sgic@gmail.com';
$Mailer->Password = '3adUlbr@17';

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
$Mailer->AddAddress('philipetessarin@ceulp.edu.br');

if($Mailer->Send()){
    echo "E-mail enviado com sucesso";
}else{
    echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
}

?>


