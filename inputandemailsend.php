<?php

session_start();
require "database.php";


$fullname = $email = $tell = $callback = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
	$fullname=$_GET['fullname'];
	$email=$_GET['email'];
	$tell=$_GET['tell'];
	$callback=$_GET['callback'];
	// echo $fullname;

	$do_sql = new database();
	$input_sql = "INSERT INTO diver (Fullname,Email,Tell,Calltime) 
		      VALUES ('$fullname','$email','$tell','$callback')";
	$input = $do_sql-> insert($input_sql);

$_SESSION['fullname'] = $fullname ;

$_SESSION['callback'] = $callback;
$_SESSION['tell'] = $tell ;


}

?>

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
    


    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'emailsender235@gmail.com';                    
    $mail->Password   = 'iqfaqsmvhmsywclg';                               //SMTP password.   pas @@1234567
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('emailsender235@gmail.com', 'from DIVER');
    $mail->addAddress($email, $fullname);     //Add a recipient
    
    $mail->addReplyTo('emailsender235@gmail.com', 'Information'); //Luc tra loi lai thi muon gui den email nao. khong nhat thiet la email gui luc ban dau
    $mail->setLanguage('vi', '/optional/path/to/language/directory/');
    $mail->isHTML(true);                                  
    $mail->Subject = 'Cám ơn bạn đã đăng ký nhận tư vấn';
    $mail->Body    = '


    ';
    $mail->msgHTML(file_get_contents('mailcontent.php'), __DIR__);
    $mail->AltBody = '';

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
	<title>Đăng ký nhận tư vấn</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="new.css">
</head>
<body class="background" >
	
		<div>
			<h2>Cám ơn bạn</h2>
			<a href="index.php"><h3> Click vào bên dưới để quay về trang chủ</h3></a>
		</div>
	


	

</body>
</html>
