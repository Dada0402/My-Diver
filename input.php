<?php
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
