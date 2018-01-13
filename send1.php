<?php 

if($_REQUEST['submit']=="Submit")
{
////// Mail ////////////
ini_set("include_path", "."); 
 require("class.phpmailer.php"); 

$sleeptmp = 0; 

// While Loop to send emails 

			$msg.= "<HTML><HEAD><TITLE>Grouptenplus :: Contact Form </TITLE></HEAD>";
			$msg.="<BODY>";
			$msg.= " <b>Full Name :</b> ".$_POST['Full_Name']."<br><br>";
			$msg.= " <b>Email Address :</b> " .$_POST['Email_Address']."<br><br>";
			$msg.= " <b>Telephone Number :</b> " .$_POST['Telephone_Number']."<br><br>";
			$msg.= " <b>Your Message :</b> " .$_POST['Your_Message']."<br><br>";
			$msg.= "</BODY></HTML>";

$subject = "Grouptenplus :: Contact Form from website  "; 
$content = " "; 
$mail = new phpmailer(); 
$mail->IsSMTP(); 
$mail->Mailer = "smtp"; 
//$mail->Host = "76.74.167.238"; 
$mail->Host = "119.18.60.96"; 
 $mail->SMTPAuth = true;
$Username= "pravin@rubiq.in";
$Password= "poojapravin";
$mail->WordWrap = 50; 
$mail->IsHTML(true); 
$mail->Subject = $subject; 
$mail->Body = $msg; 
$mail->AltBody = $content; 

$mail->From =$_POST['Email_Address'] ;
$mail->FromName =$_POST['Full_Name']; 
$mail->AddAddress("pravin@rubiq.in");
// $mail->AddAddress("ashleywiz@gmail.com");
// $mail->AddAddress("info@grouptenplus.com");




if($mail->Send()) 
{ 
	
echo "hi";exit;
 header("Location:thankyou.html");
}
else
{
$msg1= "<div align='center' style='margin-left:80px;'><font color='#FF0000'>Mailer Error: " . $mail->ErrorInfo."</font></div>"; 
}  
flush(); 
}
?>