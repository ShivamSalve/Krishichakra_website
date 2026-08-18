<?php

require 'PHPMailer/PHPMailerAutoload.php';

session_start();

        function died($error) {

            echo $error."<br /><br />";

            echo "Please go back and fix these errors.<br /><br />";

            die();

        }


        if(!isset($_POST['name']) ||

           !isset($_POST['cname']) ||

           !isset($_POST['phone']) ||

           !isset($_POST['email']) ||

		   !isset($_POST['pname']) ||

           !isset($_POST['city']) ||

           !isset($_POST['msg']))

		   {

            died("We are sorry, but there appears to be a problem with the form you submitted.");       

        }

        $honeypot = FALSE;
if (!empty($_REQUEST['contact_me_by_fax_only']) && (bool) $_REQUEST['contact_me_by_fax_only'] == TRUE) {
    $honeypot = TRUE;
    log_spambot($_REQUEST);
    # treat as spambot
} else {
    # process as normal
}


       $name = $_POST['name']; // required

        $c_name= $_POST['cname']; // required

        $phone = $_POST['phone']; // required

        $email = $_POST['email']; // not required

        $message = $_POST['msg']; // required

		$productname = $_POST['pname']; // required

        $city = $_POST['city']; // required

        $error_message = "";


        


	  	// if($_SESSION['captcha']!=$captcha)

	   //   {

		  //   $error_message .= "Please Enter Valid Captcha Code.";

		  //   died($error_message);

    //      }


$mail = new PHPMailer;


$mail->isSMTP();                                   // Set mailer to use SMTP

$mail->Host = 'smtpout.secureserver.net';

$mail->SMTPAuth = true;                            // Enable SMTP authentication

$mail->Username = 'enquiry@weblinkservices.net';          // SMTP username

$mail->Password = 'wlspl@123'; // SMTP password

//$mail->SMTPSecure = 'tls'; 

$mail->SMTPSecure = 'ssl'; 

$mail->Port = 465; 

$mail->SMTPOptions = array(

'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true

)

);                               


$mail->setFrom('enquiry@weblinkservices.net', 'Enquiry');
$mail->addReplyTo($email);

$mail->addAddress('design@weblinkservices.net');
//$mail->addBCC('manoj@weblinkservices.net');
//$mail->addBCC('info@weblinkservices.net');

$mail->isHTML(true);  // Set email format to HTML


$bodyContent ="<p><b>Name : ".$name."</b></p>";
$bodyContent .="<p><b>Company Name : ".$c_name."</b></p>";
$bodyContent .="<p><b>Phone : ".$phone."</b></p>";
$bodyContent .="<p><b>Email : ".$email."</b></p>";
$bodyContent .="<p><b>Product Name :".$productname."</b></p>";
$bodyContent .="<p><b>City Name :".$city."</b></p>";
$bodyContent .="<p><b>Message :".$message."</b></p>";

$mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);

$mail->Subject = 'Enquiry from Website (Website Domain Here)';

$mail->Body    = $bodyContent;

if(!$mail->send()) {

    echo 'Message could not be sent.';

    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {

    echo "<script type='text/javascript'>alert('Your email has been sent!')</script>";

echo "<script>document.location='enquiry.php'</script>";

}

?>

