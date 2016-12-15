<?php
 	include('session.php');
	$error='';

	$form = "SELECT * FROM users WHERE username = '$login_session'";
  	$result = mysqli_query($db,$form);
  	$row = mysqli_fetch_assoc($result);

	$id = htmlspecialchars($_GET["id"]);

	if($row['userid'] == $id){
		$error = "Não pode eliminar a conta de administrador.";
	} else {
		$sql = "DELETE FROM users WHERE userid=$id ";

		if (mysqli_query($db, $sql)) {
			$error = "Utilizador eliminado com sucesso";
		} else {
    		$error = "Erro a eliminar utilzador: " . mysqli_error($db);
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

			<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			<h2><a href = "verusers.php">Voltar</a></h2>
		</fieldset>
	</div>
</body>
</html>