<?php
if(isset($_POST['submit'])) 
{

$message=
'Full Name:	'.$_POST['name'].'<br />
Phone:	'.$_POST['phonenumber'].'<br />
Email:	'.$_POST['email'].'<br />
Address:  '.$_POST['address'].'<br />
Comments:	'.$_POST['message'].'
';
    require "vendor/autoload.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer\PHPMailer\PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "elitetreeohio@gmail.com"; // Your full Gmail address
    $mail->Password   = "216beatriders"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['email'], $_POST['name']);
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
    $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("elitetreeohio@gmail.com"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail); 
}

if(isset($_POST['submit'])) 
{
    header('Location: http://www.elitetreeohio.com/');
}
?>