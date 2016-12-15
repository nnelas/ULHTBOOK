<?php
	include('session.php');
	$error='';

	$sql2 = "SELECT * FROM users WHERE username = '$login_session'";
	$result2 = mysqli_query($db,$sql2);
	$row2 = mysqli_fetch_assoc($result2);

?>
<html>
<head>
	<title>ULHT BOOK</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
   <div class="container">
		<fieldset>
			<legend>Bem-vindo, <?php echo $login_session; ?></legend>
				
			<?php
				$sql = "SELECT DISTINCT a.username, a.urlpic" .
						"FROM users a" .
						"WHERE a.userid in (SELECT user_a FROM friends WHERE user_a = $userid OR user_b = $userID) and a.userid <> $userid" .
						"UNION" .
						"SELECT b.username, b.urlpic" .
						"FROM users b" .
						"WHERE b.userid in (SELECT user_b FROM friends WHERE user_a = $userid OR user_b = $userID) and b.userid <> $userid";

    			$result = mysqli_query($db,$sql);
    			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    			if (mysqli_num_rows($result) > 0) {
    			// output data of each row
    				while($row = mysqli_fetch_assoc($result)) {
    					echo "<br>" . "<img height='150' src='".$row["urlpic"]."'>" . "<br>" . "<br>" .
    						 "Nome de utilizador: " . $row["username"] . "<br>" . 
    		     	 		 "Nome: " . $row["name"] . "<br>";
    				}
				}

			?>
			
			<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			<?php echo "<h2><a href = 'users.php?id=$row2[userid]'>Voltar</a></h2>"; ?>
		</fieldset>
	</div>
</body>
</html>