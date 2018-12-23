<?php 


$mail = $_POST['email'];
$msg = $_POST['msg'];

	$to = 'jprai.jrss@gmail.com';
    $from = "info@hwebs.in";
    $subject = "Test Mail";
	$subject1 = "JRSS";

    //begin of HTML message
    $message = <<<EOF
	
	<html>
		<body>
			<table>
				
				<tr>
					<td>Email Id</td><td>$mail</td>
				</tr>
				<tr>
					<td>Message</td><td>$msg</td>
				</tr>
			</table>
			<table>
				<tr>
					<td>This is Send By $mail Please contact him.</td>
				</tr>				
			</table>
		</body>
	</html>

EOF;

 $message1 = <<<EOF
	
	<html>
		<body>
			<table>
				<tr>
					<td>Thank You $name. We will contact you soon...<br/><br/></td>
				</tr>
				<tr>
					<td>Thanks Regards<br/></td>
				</tr>
				<tr>
					<td>JRSS Institute</td>
				</tr>
			</table>
			
		</body>
	</html>

EOF;
   //end of message
    $headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";

    //options to send to cc+bcc
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]";
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]";
    
    // now lets send the email.
    mail($to, $subject, $message, $headers);
	 mail($mail, $subject1, $message1, $headers);
	
header("Location:contact.php?i=1");
?>