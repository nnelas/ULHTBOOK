<?php
	include('session.php');

	$sql = "SELECT * FROM users WHERE username = '$login_session'";
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($result);

	$id = htmlspecialchars($_GET["id"]);
	$sql2 = "SELECT * FROM users WHERE userid = '$id'";
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
    			if($row["userid"] == $id){
    				if (mysqli_num_rows($result) > 0) {
    				// output data of each row
    					echo "<img height='150' src='".$row["urlpic"]."'>" . "<br>" . "<br>" .
    						 "Nome de utilizador: " . $row["username"] . "<br>" . 
    		     	 		 "Nome: " . $row["name"] . "<br>" . 
    		 	 	 		 "Aniversário: " . $row["datebirthday"] . "<br>" .
    		 	 	   		 "Cidade: " . $row["hometown"] . "<br>" .
    		 	 			 "Educação: " . $row["school"] . "<br>" .
    		 				 "Data de registo: " . $row["datereg"] . "<br>";
    					
					}
				} else {
					echo "<img height='150' src='".$row2["urlpic"]."'>" . "<br>" . "<br>" .
    		     	 	 "Nome: " . $row2["name"] . "<br>" . "<br>" . "<br>" .
    		     		 "Não tem privilégios suficientes." . "<br>" .
    		     		 "<a href = '#'>Adicionar como amigo?</a>";
				}
			?>
			<table>
				<tr>
					<td width="250"><h2><a href = "edit.php">Editar perfil</a></h2></td>
					<td width="250"><h2><a href = "veramigos.php">Ver amigos </a></h2></td>
					<td width="250"><h2><a href = "logout.php">Sair </a></h2></td>
				</tr>
			</table>
		
		</fieldset>
	</div>
</body>
</html>