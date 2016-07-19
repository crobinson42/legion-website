<?php

$recipients = 'info@legionsecurity.us';
//$recipients = '#';

try {
    require './phpmailer/PHPMailerAutoload.php';
    require './user_response_to_quote_request.php';

    preg_match_all("/([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)/", $recipients, $addresses, PREG_OFFSET_CAPTURE);

    if (!count($addresses[0])) {
        die('MF001');
    }

    if (preg_match('/^(127\.|192\.168\.)/', $_SERVER['REMOTE_ADDR'])) {
        die('MF002');
    }

    $template = file_get_contents('rd-mailform.tpl');

    if (isset($_POST['form-type'])) {
        switch ($_POST['form-type']){
            case 'contact':
                $subject = 'Legion Security website contact form';
                $message = 'We have received a "contact form" from our website.';
                break;
            case 'quote':
                $subject = 'Service Quote request';
                $message = 'Someone from our website is requesting a quote. Be Fast, Furious, & Polite - give them what they want! We ARE THE BEST security company in town!';
                try {
                  // $thankYou = new ThankYouResponse($_POST['email']));
                  // $thankYou->send();
                }
                catch (Exception $e) {
                    die('MF-TY255');
                }
                break;
            case 'order':
                $subject = 'Order request';
                break;
            default:
                $subject = 'A message from your site visitor';
                break;
        }
    }else{
        die('MF004');
    }

    if (isset($_POST['email'])) {
        $template = str_replace(
            ["<!-- #{FromState} -->", "<!-- #{FromEmail} -->"],
            ["Email:", $_POST['email']],
            $template);
    }else{
        die('MF003');
    }

    if (isset($message)) {
        $template = str_replace("<!-- #{Message} -->", $message, $template);
    }

    if (isset($_POST['message'])) {
        $template = str_replace(
            ["<!-- #{MessageState} -->", "<!-- #{MessageDescription} -->"],
            ["Message:", $_POST['message']],
            $template);
    }

    preg_match("/(<!-- #{BeginInfo} -->)(.|\n)+(<!-- #{EndInfo} -->)/", $template, $tmp, PREG_OFFSET_CAPTURE);
    foreach ($_POST as $key => $value) {
        if ($key != "email" && $key != "message" && $key != "form-type" && !empty($value)){
            $info = str_replace(
                ["<!-- #{BeginInfo} -->", "<!-- #{InfoState} -->", "<!-- #{InfoDescription} -->"],
                ["", ucfirst($key) . ':', $value],
                $tmp[0][0]);

            $template = str_replace("<!-- #{EndInfo} -->", $info, $template);
        }
    }

    $template = str_replace(
        ["<!-- #{Subject} -->", "<!-- #{SiteName} -->"],
        [$subject, $_SERVER['SERVER_NAME']],
        $template);

    $mail = new PHPMailer();
    $mail->From = $_POST['email'];

    if (isset($_POST['name'])){
        $mail->FromName = $_POST['name'];
    }else{
        $mail->FromName = "Site Visitor";
    }

    foreach ($addresses[0] as $key => $value) {
        $mail->addAddress($value[0]);
    }

    $mail->CharSet = 'utf-8';
    $mail->Subject = $subject;
    $mail->MsgHTML($template);

    if (isset($_FILES['attachment'])) {
        foreach ($_FILES['attachment']['error'] as $key => $error) {
            if ($error == UPLOAD_ERR_OK) {
                $mail->AddAttachment($_FILES['attachment']['tmp_name'][$key], $_FILES['Attachment']['name'][$key]);
            }
        }
    }

    $mail->send();

    die('MF000');
} catch (phpmailerException $e) {
    die('MF254');
}

?>
