<?php 

if($_REQUEST['submit']=="Submit")
{
	$fnamename=$_POST["Full_Name"]; 
	$email=$_POST['Email_Address'];
	$tele=$_POST['Telephone_Number'];
	$msg=$_POST['Your_Message'];
	$sleeptmp = 0; 
			
	$message="Grouptenplus :: Contact Form from website  
	\nFull Name:$fnamename
	\nEmail Address:$email
	\nTelephone:$tele
	\nYour Message:$msg";

	$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$mail_from="$email";
 		$header ="from: $name <$mail_from>". "\r\n";
		$to ='ashleywiz@gmail.com';
		$send_contact=mail($to,$subject,$message,$header);
		$to ='info@grouptenplus.com';
		$send_contact=mail($to,$subject,$message,$header);
		if($send_contact){
				header("Location:thankyou.html");
			}
		else {
				$msg1= "<div align='center' style='margin-left:80px;'><font color='#FF0000'>Mailer Error: " . $mail->ErrorInfo."</font></div>"; 
			}flush();
}
?>