<?php
session_start();
if (isset($_SESSION['name'])) {
	include "layouts/header2.php";
	include "config.php";

	$sql = "SELECT * FROM `chat`";

	$query = mysqli_query($conn, $sql);
?>

	<head>
		<link rel="stylesheet" href="css/chatpage.css ?php echo time(); php?>">
	</head>
	<div=>
		<center>
			<h2>Welcome <span style="color:black;"><?php echo $_SESSION['name']; ?> !</span></h2>
			<label>Join the chat</label>
		</center></br>
		<div class="trial">
			<?php
			if (mysqli_num_rows($query) > 0) {
				while ($row = mysqli_fetch_assoc($query)) {
			?>
					<div class="showchat">
						<p>
							<span><?php echo $row['name']; ?> :</span>
							<?php echo $row['message']; ?>
						</p>
					</div>
				<?php
				}
			} else {
				?>
				<div>
					<p>
						No previous chat available.
					</p>
				</div>
			<?php
			}
			?>

		</div>
		<form method="post" action="sendmsg.php" class="sendmsg">
			<div>
				<div>
					<textarea name="msg" placeholder="Type your shit here..." class="msg"></textarea>
				</div>

				<div>
					<button type="submit" class="send">Send</button>
				</div>

			</div>
		</form>
		</div>

		</body>

		</html>
	<?php
} else {
	header('location:index.php');
}
	?>