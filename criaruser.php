<?php
   include('session.php');
   $error='';

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$myusername = mysqli_real_escape_string($db,$_POST['username']);
		$mypassword = mysqli_real_escape_string($db,$_POST['password']);
    	$myname = mysqli_real_escape_string($db,$_POST['name']);
    	$myemail = mysqli_real_escape_string($db,$_POST['email']);
    	$mydatebirthday = mysqli_real_escape_string($db,$_POST['datebirthday']);
    	$myhometown = mysqli_real_escape_string($db,$_POST['hometown']);
    	$myschool = mysqli_real_escape_string($db,$_POST['school']);
    	$myurlpic = mysqli_real_escape_string($db,$_POST['urlpic']);
    	$mydatereg = mysqli_real_escape_string($db,$_POST['datereg']);

		$sql = "INSERT INTO users (username, password, name, email, datebirthday, hometown, school, urlpic, datereg) values ('$myusername', '$mypassword', '$myname', '$myemail', '$mydatebirthday', '$myhometown', '$myschool', '$myurlpic', '$mydatereg')";

		if (mysqli_query($db, $sql)) {
    		$error = "Utilizador adicionado!";
		} else {
    		$error = "Erro: " . $sql . "<br>" . mysqli_error($db);
		}
   }
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
				<form method = "post">	
					<table>
						<tr>
							<td height="40"><label>nome de utilizador: </label></td>
							<td><input type = "text" name = "username" class = "box" required="required"/></td>
						</tr>
						<tr>
							<td height="40"><label>nome: </label></td>
							<td><input type = "text" name = "name" class = "box" required="required"/></td>
						</tr>
						<tr>
							<td height="40"><label>palavra-passe: </label></td>
							<td><input type = "password" name = "password" class = "box" required="required"/></td>
						</tr>
						<tr>
							<td height="40"><label>email: </label></td>
							<td><input type = "text" name = "email" class = "box" required="required"/></td>
						</tr>
						<tr>
							<td height="40"><label>data de nascimento: </label></td>
							<td><input type = "date" name = "datebirthday" class = "box" required="required"/></td>
						</tr>
						<tr>
							<td height="40"><label>cidade: </label></td>
							<td><input type = "text" name = "hometown" class = "box" required="required"/></td>
						</tr>
						<tr>
							<td height="40"><label>educação: </label></td>
							<td><input type = "text" name = "school" class = "box" required="required"/></td>
						</tr>
						<tr>
							<td height="40"><label>foto de perfil: </label></td>
							<td><input type = "text" name = "urlpic" class = "box" required="required"/></td>
						</tr>
						<tr>
							<td height="40"><label>data de registo: </label></td>
							<td><input type = "date" name = "datereg" class = "box" required="required"/></td>
						</tr>
					</table>
					<br><br>
					<input type = "submit" value = " Criar novo utilizador "/><br />
				</form>
				<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			<h2><a href = "admin.php">Voltar</a></h2>
		</fieldset>
	</div>
</body>
</html>