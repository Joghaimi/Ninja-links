<?php
use PHPMailer\PHPMailer\PHPMailer;
define ('GUSER','thespectrumlink@gmail.com');
define ('GPWD','Ahmad6621090');
// make a separate file and include this file in that. call this function in that file.

function smtpmailer($to, $from, $from_name, $subject, $body) { 
    // global $error;
    $mail = new PHPMailer();  // create a new object
    $mail->IsSMTP(); // enable SMTP
    // $mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;  // authentication enabled
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
    $mail->SMTPAutoTLS = false;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;

    $mail->Username = GUSER;  
    $mail->Password = GPWD;           
    $mail->SetFrom($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    if(!$mail->Send()) {
        // $error = 'Mail error: '.$mail->ErrorInfo; 
        return false;
    } else {
        // $msg = 'Message sent!';
        return true;
    }
}
function send_mail($subject,$body,$to) { 
    smtpmailer($to,'thespectrumlink@gmail.com','spectrum_links',$subject,$body);
}