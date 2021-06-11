<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'class/phpmailer/Exception.php';
require_once 'class/phpmailer/PHPMailer.php';
require_once 'class/phpmailer/SMTP.php';

class email{
  private $mail;

  function __construct($host,$username,$password,$name){
    $this->mail = new PHPMailer;
    
    $this->mail->isSMTP();
    $this->mail-> Host = $host;
    $this->mail-> SMTPAuth = true;
    $this->mail-> Username = $username;
    $this->mail-> Password = $password;
    $this->mail-> SMTPSecure =PHPMailer::ENCRYPTION_STARTTLS;
    $this->mail-> Port = '587';

    $this->mail-> setFrom($username,$name);
    $this->mail-> isHTML(true);
    $this->mail-> CharSet = 'UTF-8';
    } 

    function addAdress($email,$nome){
      $this->mail-> addAddress($email,$nome);
    }

    function formatarEmail($info){
      $this->mail-> Subject = $info['subject'];
      $this->mail-> Body = $info['body'];
      $this->mail-> AltBody = strip_tags($info['body']);
    }

    function sendEmail(){
      if($this->mail-> send()){
        return true;
      }else{
        return false;
      }
    }

}
?>

