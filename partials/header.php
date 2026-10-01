<?php

include_once 'config/config.php';
//validate file name
$fileName = basename($_SERVER["SCRIPT_NAME"],".php");

$title =  TITLES[$fileName];
?>


<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>

	<title>
		<?php echo $title; ?>
	</title>

	<!-- Bootstrap CSS -->
	<link
			href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css'
			rel='stylesheet'
	>

	<!-- Custom CSS -->
	<link rel='stylesheet' href='assets/css/style.css'>
</head>

<body>