<?php
/**
 * This Class is a simple emailer that sends a Thank You email template to an email
 * address for requesting a quote.
 */

 // require dirname(__FILE__) .'/phpmailer/PHPMailerAutoload.php'

class ThankYouResponse {

  private $template;
  private $email;

  function __construct() {
    $this->template = file_get_contents('rd-mailform_thank_you.tpl');
  }

  function send($email) {
    $this->email = $email;

    if (!isset($this->email)) {
      die();
    }

    $mail = new PHPMailer();
    //Enable SMTP debugging.
    // $mail->SMTPDebug = 3;
    // Set PHPMailer to use SMTP.
    $mail->isSMTP();
    //Set SMTP host name
    $mail->Host = "gator2020.hostgator.com";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;
    //Provide username and password
    $mail->Username = "donotreply@legionsecurity.us";
    $mail->Password = "Legiontheway1";
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "tls";
    //Set TCP port to connect to
    $mail->Port = 587;

    $mail->From = "info@legionsecurity.us";
    $mail->FromName = "Legion Security";
    $mail->addAddress($this->email);
    $mail->CharSet = 'utf-8';
    $mail->Subject = "Thank You! Legion Security is the right choice";
    $mail->MsgHTML($this->template);

    $mail->send();

    // don't die because the rest of the script doesn't get executed.
    // die('MF000');
  }

}

?>
