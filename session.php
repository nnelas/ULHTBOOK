<?php
	include('config.php');
	session_start();
   
	if (!isset($_SESSION['login_user'])){
		$login_session = 'guest';
		$id = '0';
	} else {
		$user_check = $_SESSION['login_user'];
   
		$ses_sql = mysqli_query($db,"select username from users where username = '$user_check' ");
   
		$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
		$login_session = $row['username'];
	}
?>