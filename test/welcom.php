<?php
	include 'conn.php';
	
	if (isset($_SESSION['user'])) {
		$user = $_SESSION['user'];
	}
	else {
		header("Location: index.php");
	}
	if (isset($_POST["logout"])) {
		unset($_SESSION['user']);
		header("Location: index.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div id="box">
		<br>
		<label id="lbl2">Welcome, <b><?php echo $_SESSION['user']; ?></b>!</label><br><br>
		<label id="lbl3"><i>Yay!!</i> <br><br>You finally have learned the basics of PHP syntax, conditional statements, sessions, passing variables between HTML & PHP, setting up database connection, retrieving data from database. <br><br>
		Follow RicaSketches for some art content. Might as well order a commission? 😂 DM's are open!<br><br>

		<br>
		<li>Insta: <a href="https://instagram.com/ricasketches">Follow (@Ricasketches)</a></li>
		<li>Twitter: <a href="https://twitter.com/ricasketches">Twitter (@Ricasketches)</a></li>

		</label>
		<br><br>

		<form method="post">
			<li>
				<input type="submit" value="Log Out" name="logout" class="btn">
			</li>
		</form>

	</div>

</body>
</html>
