<?php
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require_once("src-phpmailer/PHPMailer.php");
require_once("src-phpmailer/SMTP.php");

// Chama as configurações da conta
require_once("mailconfig.php");

$nome = $_POST['nome'];
$social = $_POST['social'];
$website = $_POST['website'];
$html = htmlentities($_POST['html']);
$css = htmlentities($_POST['css']);
$js = htmlentities($_POST['js']);
$titulo = $_POST['titulo'];

// Inicia a classe PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP();
$mail->Mailer = 'smtp';
//$mail->SMTPDebug = 1;
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->Username = "$emailcfg";
$mail->Password = "$senhacfg";

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "$emailcfg"; // Seu e-mail
$mail->FromName = "$remetcfg"; // Seu nome

// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress("$emailcfg", "$remetcfg");

// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML

$mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)

// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Code Idea - New Code"; // Assunto da mensagem
$mail->Body = "<b>Nome:</b> $nome<hr />";
$mail->Body .= "<b>Social:</b> $social<hr />";
$mail->Body .= "<b>Website:</b> $website<hr />";
$mail->Body .= "<b style='color: #f06529;'>HTML:</b> $html<hr />";
$mail->Body .= "<b style='color: #2965f1;'>CSS:</b> $css<hr />";
$mail->Body .= "<b style='color: #f0db4f;'>JS:</b> $js<hr />";
$mail->Body .= "<b>Título:</b> $titulo<hr />";

$mail->AltBody = "Nome: $nome\r\nSocial: $social\r\nWebsite: $website\r\nHTML: $html\r\nCSS: $css\r\nJS: $js";

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
if ($enviado) {
  echo '<script>';
  echo 'alert("Obrigado por colaborar conosco! Seu código será publicado em breve.");';
  echo 'window.location.href = "http://www.codeidea.com";';
  echo '</script>';
} else {
  echo '<script>';
  echo 'alert("Erro ao enviar formulário, tente novamente!");';
  echo 'window.location.href = "http://www.codeidea.com/enviar";';
  echo '</script>';
  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
}
