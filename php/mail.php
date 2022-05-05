<?php 
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/Gmail.php';
    //Define name spaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    //Create instance of PHPMailer
    $mail = new PHPMailer();
    //Set mailer to use smtp
    $mail->isSMTP();
    //Displaying the error
    //$mail->SMTPDebug = 1; 
    //Define smtp host
    $mail->Host = "smtp.gmail.com";
    //Enable smtp authentication
    $mail->SMTPAuth = true;
    //Set gmail username
    $mail->Username = EMAIL;
    //Set gmail password
    $mail->Password = PASSWORD;
    //Set smtp encryption type (ssl/tls)
    $mail->SMTPSecure = "tls";
    //Port to connect smtp
    $mail->Port = "587";

    //Fix error from PHPMailer SMTP Error: Could not connect to SMTP host
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );

    // //Enable HTML
    // $mail->isHTML(true);
    // //Set sender email
    // $mail->setFrom(EMAIL,'PUP Event Management System');
    // //Add recipient
    // $mail->addAddress('marcjohncastillo24@gmail.com');
    // //Email subject
    // $mail->Subject = "Confirm Email Address";
    // //Email body
    // $mail->Body = "<h1>This is HTML h1 Heading</h1></br><p>This is html paragraph</p>";
    // //Attachment
    // //$mail->addAttachment('img/attachment.png');

    // //Finally send email
    // if($mail->send()) {
    //     echo "Email Sent..!";
    // }else{
    //     echo "Message could not be sent. Mailer Error: ". $mail->ErrorInfo;
    // }
    // //Closing smtp connection
    // $mail->smtpClose();
?>