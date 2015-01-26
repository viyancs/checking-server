<?php
include_once './vendor/autoload.php';
Class EmailUtil {
   public static function send($host,$port)
   {
      $mail = new PHPMailer;

      $mail->SMTPDebug = 3;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'mailserver';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'developer@domain.com';                 // SMTP username
      $mail->Password = 'pass';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      $mail->From = 'developer@apps.microad.co.id';
      $mail->FromName = 'Developer';
      $mail->addAddress('yourmail');               // Name is optional

      $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
      $mail->isHTML(true);                                  // Set email format to HTML

      $mail->Subject = 'Maintenance';
      $mail->Body    = 'Port '.$port.' in Host ' .$host.' <b>is NOT ACTIVE</b>';

      if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          echo 'Message has been sent';
      }
   }   
}

//enable bottom code for testing via php-cli
// position [0] is the script's file name
/*array_shift(&$argv);
$className = array_shift(&$argv);
$funcName = array_shift(&$argv);

echo "Calling '$className::$funcName'...\n";

call_user_func_array(array($className, $funcName), $argv);*/
