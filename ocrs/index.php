<?php 
session_start();
include('config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Online Car Rental System</title>
</head>
<body>
	<?php include('header.php');?>
	<?php include('login.php');?>
	<?php include('register.php');?>
	<?php include('forgotpassword.php');?>
	<?php include('footer.php');?>
</body>
