<?php
function send_mail($POST){
    require_once ( 'vendor/autoload.php' );
    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
    $mail->CharSet = "UTF-8";
    $mail->isSMTP();
    //$mail->SMTPDebug = 1;
    $mail->Host = 'mail.novizio.net';
    $mail->SMTPAuth = true;
    $mail->Username = 'info';
    $mail->Password = 'novizio0806';
    $mail->SMTPSecure = 'CRAM-MD5';
    $mail->Port = 25;
    $mail->From = 'marie@mail.novizio.net';
    $mail->addAddress('marie@mail.novizio.net');
    //$mail->addCC();
    //$mail->addBCC();
    $subject = 'PORTFORIO MAIL';

    if ($POST['name'] != null && $POST['email'] != null && $POST['message'] != null ){
$body = <<< EOF
名前：{$POST['name']}
メール：{$POST['email']}
メッセージ{$POST['message']}
EOF;
        $mail->isHTML(false);
        $mail->FromName = mb_encode_mimeheader("novizio mail", "ISO-2022-JP", "UTF-8");
        $mail->Subject = mb_encode_mimeheader($subject, "ISO-2022-JP", "UTF-8");
        $mail->Body = $body;
        $mail->send();
        echo 'mail send success!';
    }else{
        echo "can't send mail";
    }  
}
