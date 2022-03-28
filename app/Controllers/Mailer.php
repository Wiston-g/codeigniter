<?php 
namespace App\Controllers;


use CodeIgniter\Controller;
//php mailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require  '../vendor/autoload.php' ;

class Mailer extends Controller{
    
    public function index()
    {
        $correo = $_POST['mail'];
        $nombre = $_POST['name'];
        echo $correo; 
        

        $mail = new PHPMailer(true);
        $miMail = 'nanaogomez02@gmail.com';
        $pass = 'bkvgsipuebjyahuo';
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $miMail;                                //SMTP username
            $mail->Password   = $pass;                                  //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom($miMail, 'wistinbis');
            $mail->addAddress($correo, $nombre);                    //Add a recipient
            //$mail->addAddress('ellen@example.com');               //Name is optional con esta linea puedo enviar las veces que quiera
            $mail->addReplyTo('wiston.j.g@gmail.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'el asunto que yo quiero';
            $mail->Body    = 'Aqui va el cuerpo del mensaje  <b>in bold!</b>';
            $mail->AltBody = 'esto es lo que va a parecer de notificacion';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }


        return view('mailer.php');
    }    
}