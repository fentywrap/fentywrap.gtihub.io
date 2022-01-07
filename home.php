<?php
session_start();
if (isset($_SESSION['name'])) {
	include "layouts/header2.php";
	include "config.php";

	$sql = "SELECT * FROM `chat`";

	$query = mysqli_query($conn, $sql);
?>


	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="css/home.css ?php echo time(); ?>">
	</head>

	<body>
		<img src="images/home1.gif" class="hom" alt="">
		<div class="blck">
			<center>
				<h1>Welcome <span style="color:white;"><?php echo $_SESSION['name']; ?> !</span></h1>
				<br><br>
				<label>Click below to Join the chat</label><br>
				<br><br>
				<a href="chatpage.php" class="oole">Feeling takin over me!</a>
				<a href="chat2.php" class="oole">405</a>
				<a href="chat3.php" class="oole">Caught a vibe</a>
				<a href="chat4.php" class="oole">Hit the cloud</a>
        </div4>
	</body>

	</html>


<?php
} else {
	header('location:index.php');
}
?>