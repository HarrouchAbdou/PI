<?php

    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    
   

    // Load Composer's autoloader
    require 'vendor/autoload.php';

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'clients');
    $email=$_POST['email'];
    $requette_selection="select * from clients where Email='$email' " ;
    $resultat=mysqli_query($con,$requette_selection);
    $NOL=mysqli_num_rows($resultat);
    if ($NOL==1){
        while($row = mysqli_fetch_array($resultat)){
            $User=$row["Username"];
            $email=$row["Email"];
        }
        $text=$User.'@'.$email;
        $text=md5($text);
        $_SESSION['Mail']=$email;
        $_SESSION['codeVerification']=$text;
    }
    else{
        echo "Vous n'etes pas inscrits :|";
    }
    mysqli_select_db($con,'reset_password');
    $requette_insertion="INSERT INTO `reset_password`(`email`,`Username`,`token`) VALUES ('$email','$User','$text') ";
    mysqli_query($con,$requette_insertion);

    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'tastymaklaa@gmail.com';                     // SMTP username
    $mail->Password   = 'projet.15';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('tastymaklaa@gmail.com', 'Mailer');
    $mail->addAddress('harrouchabdou@gmail.com');               // Name is optional
    


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mail Validation';
    $mail->Body    ="Votre Code de validation est : ".$text;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    header('location:EntrerCode.php');  
    mysqli_close($con);
?>
