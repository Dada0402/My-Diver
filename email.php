<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require 'Exception.php';
	require 'PHPMailer.php';
	require 'SMTP.php';

	$mail = new PHPMailer(true);

try {
    //Server settings
    


    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'emailsender235@gmail.com';                     //SMTP username
    $mail->Password   = 'iqfaqsmvhmsywclg';                               //SMTP password.   pas @@1234567
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('emailsender235@gmail.com', 'from DIVER');
    $mail->addAddress('thanhtaivt@gmail.com', 'Joe User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('nthongday@gmail.com', 'Information'); //Luc tra loi lai thi muon gui den email nao. khong nhat thiet la email gui luc ban dau
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1> LEARNING EMAIL</h1>
		<div class="container-main2 center">
			<div class="row">
				<div class="col-12">
					<form action="new.php" method="get">
						<div class="row">
							<div class="col-6">
								<input class="border round" type="text" name = "fullname" placeholder="Họ và Tên">
								<input class="border round" type="text"  name = "email" placeholder="Email">
								
							</div>
							<div class="col-6">
								<input class="border round" type="tel" name = "tell" placeholder="Số điện thoại">
								<input class="border round" type="datetime-local" name = "callback" placeholder="Thời gian tư vấn">
								
							</div>
							<div class="col-12">
								<button class="bg" type="submit" > ĐĂNG KÝ NGAY</button> 
							</div>
							
						</div>
					</form>	
				</div>
			</div>
		</div>
	

</body>
</html>