<?php 

require_once('../../PHPMailer/PHPMailerAutoload.php');

// Capturing form data

  $name = $_POST['name'];
  $recipient = $_POST['email'];
  $phone = $_POST['telefono'];
  $submit = $_POST['submit'];

// MAIL DISEÑO
  $mail = new PHPMailer();
  $mail->setLanguage('es', '../../PHPMailer/language/phpmailer.lang-es.php');
  // $mail->SMTPDebug = 3;
  $mail->isSMTP();
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = '587';
  $mail->Username = 'jstr.pulido9@gmail.com';
  $mail->Password = 'Pillarsingrey';
  $mail->SetFrom('noreply@somosimpulsa.com');
  $mail->Subject = 'Planes de desarrollo web - Impulsa Creativos';
  $mail->Body = '
    <html>
      <body>
        <h1 class="mail-heading">Impulsa Creativos</h1>
        <p class="mail-content">Si recibiste este correo es porque solicitaste información acerca de nuestros planes de diseño.</p>
      </body>
      
    </html>
  ';
  $mail->AltBody = 'Impulsa Creativos. Si recibiste este correo es porque solicitaste información acerca de nuestros planes de diseño';
  $mail->AddAddress($recipient);
  $mail->AddAttachment('../../services/webdev.pdf');
  $mail->isHTML(true);
  
  


// On form submit logic

if (isset($submit)) {
  // Send Email
  if (!$mail->Send()) {
    echo 'Message could not be sent';
    echo 'Mailer error: ' . $mail->ErrorInfo;
  } else {
    echo 'Message has been sent';
  }

}