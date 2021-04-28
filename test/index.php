<?php
	include 'conn.php';
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = mysqli_query($conn, "SELECT * FROM acc_tbl WHERE id = '1'");
		$fetchsql = mysqli_fetch_array($sql);
		$usr = $fetchsql['usern'];
		$psw = $fetchsql['userp'];

		if ($username == $usr && $password == $psw) {
			
			$_SESSION['user'] = $username;
			header("Location: welcom.php");

		}
		else {
			header("Location: welcom.php");
		}
	}

	include 'login.html';

?>

