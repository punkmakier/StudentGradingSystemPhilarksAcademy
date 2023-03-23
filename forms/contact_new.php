<?php

    require_once("../include/initialize.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require '../phpmailer/src/Exception.php';
    require '../phpmailer/src/PHPMailer.php';
    require '../phpmailer/src/SMTP.php';

    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug  = 0;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "ssl";
    $mail->Port       = 465; //587
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "philarkchristianacademy.inc1@gmail.com";
    $mail->Password   = "hqlbynmbunnmepyh";
    $mail->IsHTML(true);
    $mail->AddAddress( "philarkchristianacademy.inc1@gmail.com");
    $mail->SetFrom($_POST['email'], "Client Sender");
    $mail->Subject = $subject;
    $mail->Body = $message;
    if($mail->send()){
        echo "<script>alert('Your message has been sent. Thank you!')</script>";
      redirect(web_root."index.php?q=contact");

    }else{
        echo "<script>alert('Something went wrong...')</script>";
        redirect(web_root."index.php?q=contact");

    }

?>