<?php
   include('session.php');
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

			<table>
				<tr>
					<td width="400"><h2><a href = "verusers.php">Ver todos os utilizadores</a></h2></td>
					<td width="400"><h2><a href = "criaruser.php">Criar novo utilizador</a></h2></td>
					<td width="400"><h2><a href = "logout.php">Sair</a></h2></td>
				</tr>
			</table>
		</fieldset>
	</div>
</body>
</html>