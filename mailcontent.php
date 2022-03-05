<?php
session_start();
require "database.php";
$fullname  = $_SESSION['fullname'];
$callback = $_SESSION['callback'] ;
$tell= $_SESSION['tell'] ;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h3> Cám ơn <?php echo $fullname;?></h3>
<h4> Dưới đây là thông tin bạn đăng ký nhận tư vấn</h4>
<p> Số điện thoại : <?php echo $tell;?></p>

<p> Thời gian nhận tư vấn : <?php echo $callback;?> </p>
</body>
</html>