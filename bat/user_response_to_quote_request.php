<?php
/**
 * This Class is a simple emailer that sends a Thank You email template to an email
 * address for requesting a quote.
 */

 // require dirname(__FILE__) .'/phpmailer/PHPMailerAutoload.php'

class ThankYouResponse {

  var $template;
  var $email;

  function __construct($email) {
    $this->$template = file_get_contents(dirname(__FILE__) . 'rd-mailform_thank_you.tpl');
    $this->$email = $email;
  }

  function send() {
    if (!isset($this->$email)) {
      die();
    }

    $mail = new PHPMailer();
    $mail->From = "info@legionsecurity.us";
    $mail->FromName = "Legion Security";
    $mail->addAddress($this->$email);
    $mail->CharSet = 'utf-8';
    $mail->Subject = "Thank You! Legion Security is the right choice";
    $mail->MsgHTML($this->$template);

    $mail->send();

    die('MF-TY000');
  }

}

?>
