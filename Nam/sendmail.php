<?php
function GuiMail(){   
    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: debug mode. using 0 
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'FPTgwedu@gmail.com'; // SMTP username
        $mail->Password = 'FPTedu6666';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('FPTgwedu@gmail.com', 'FPT GW education system' ); 
        $mail->addAddress('FPT.GW.QAcoordinator@gmail.com', 'QA Coordinator'); //QA mail 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'notification...!';
        $mailcontent = '<p>author!<hr><b>posted new idea</b></p>'; 
        $mail->Body = $mailcontent;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo 'mail has been sent';
    } catch (Exception $e) {
        echo 'Mail could not be send. error: ', $mail->ErrorInfo;
    }
 }//function GuiMail
 ?>
 <?php
    Guimail();
 ?>