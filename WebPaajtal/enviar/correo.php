<?php
$nombre = utf8_decode($_POST['nombre']);
$correo = $_POST['correo'];
$telefono = $_POST['tel'];
$titulo = "Solicitud de Contacto";
$mensaje = utf8_decode($_POST['comentario']);
//var_dump($_POST); exit;
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('America/Cancun');

require_once('../sendMail/class.phpmailer.php');
    require_once('../sendMail/class.smtp.php');
require '../sendMail/PHPMailerAutoload.php';


    try {
        $mail = new PHPMailer(true);
        $mail->IsSMTP(); // Using SMTP.
        $mail->CharSet = 'utf-8';
        $mail->SMTPAuth = false; // Enables SMTP authentication.
        $mail->Host = "mail.preypro.com.mx"; // SMTP server host.
		$mail->SMTPAuth = true;
    $mail->Username = "noreplay@preypro.com.mx"; 
    $mail->Password = "{8BO_Nh&7pR!"; 
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

        //$mail->AddAddress('info@consmanage.com.mx', 'Contacto');
        $mail->AddAddress('info@consmanage.com.mx', 'Contacto');
        $mail->SetFrom('noreplay@preypro.com.mx', 'Solicitud de Contacto');
        $mail->Subject = 'Tenemos un mensaje de '.$nombre.'!';
$cuerpoHTML = '	<html>
    <head><title>Solicitud de Contacto</title></head>
    <body><table align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="border: 0;">
 
 <tr>
 
<td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0;border: 0;">
 
 <h1 style="color: #ffffff; font-family: Arial, sans-serif;">Solicitud de Contacto</h1>
 
</td>
 
 </tr>
 
 <tr>
 
<td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;border-top: 0;">
 
 <table border="1" cellpadding="0" cellspacing="0" width="100%">
 
<tr>
 
 <td style="padding: 20px 0 30px 0;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;border: 0;">
 
  Nombre: '.$nombre.'
 
 </td>
 
</tr>
<tr>
 
 <td style="padding: 20px 0 30px 0;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;border: 0;">
 
  Correo: '.$correo.'
 
 </td>
 
</tr>
 
<tr>
 
 <td style="padding: 20px 0 30px 0;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;border: 0;">
 
  Telefono: '.$telefono.'
 
 </td>
 
</tr>

<tr>
 
 <td style="padding: 20px 0 30px 0;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;border: 0;">
 
  Titulo: '.$titulo.'
 
 </td>
 
</tr>
<tr>
 
 <td style="padding: 20px 0 30px 0;color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;border: 0;">
 
  Mensaje: '.$mensaje.'
 
 </td>
 
</tr>
 
 
 </table>
 
</td>
 
 </tr>
 
 <tr>
 
<td bgcolor="#ee4c50" style="padding: 30px 30px 30px 30px;border: 0;">
 
 <table border="0" cellpadding="0" cellspacing="0" width="100%">
 
 <tr>
 
<td width="75%" style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;border: 0;">
 
 Integra Corporativo 2017 &reg;
 
</td>
 
 </tr>
 
</table>
 
</td>
 
 </tr>
 
</table>
    </body>
 </html>';

        $mail->MsgHTML($cuerpoHTML);
        if (!$mail->send()) { //Error
    echo 	"<div class='alert alert-danger'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				<strong><span class='glyphicon glyphicon-remove' aria-hidden='true'></span> OcurriÃ³ un error al enviar tu correo, disculpa las molestias. Porfavor intenta de nuevo.</strong><br>
			</div>";
} else { // Correcto
	echo 	"<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				<strong><span class='glyphicon glyphicon-ok' aria-hidden='true'></span> Enviado! Muchas gracias ".$nombre."</strong>
			</div>";
}


    } catch (phpmailerException $e) {
        echo $e->errorMessage();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>
