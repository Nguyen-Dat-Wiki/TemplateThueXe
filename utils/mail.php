<?php
    include "../mail/PHPMailer.php";
    include "../mail/OAuthTokenProvider.php";
    include "../mail/Exception.php";
    include "../mail/OAuth.php";
    include "../mail/POP3.php";
    include "../mail/SMTP.php";
    

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    class MailSend{
        public function mailsend($to, $name, $subject, $message){
            $mail = new PHPMailer(); 
            try {
                //Server settings
                $mail->SMTPDebug = 0;  
                $mail->isSMTP(); 
                
                
                // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'datanhem456@gmail.com';                 // SMTP username
                $mail->Password = 'ilwyooijnvivqyxb';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
             
                //Recipients
                $mail->setFrom('datanhem456@gmail.com');
                $mail->addAddress('datanhem456@gmail.com');     // Add a recipient
                /* $mail->addReplyTo('info@example.com', 'Information');
                $mail->addCC('cc@example.com');
                $mail->addBCC('bcc@example.com'); */
             
                //Attachments
               /*  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */    // Optional name
             
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = 'Chủ đề của khách là: '.$subject.'<br>Name khách: '.$name.'<br>Email của khách là: '.$to. '<br> Nội dung:' .$message;
                /* $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; */
             
                $mail->send();
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }
             
        }                           // Passing `true` enables exceptions
    }
?>