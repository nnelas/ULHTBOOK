<?php
   include('session.php');
   $error='';

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
				$sql = "SELECT * FROM users";
    			$result = mysqli_query($db,$sql);

    			if (mysqli_num_rows($result) > 0) {
    			// output data of each row
    				while($row = mysqli_fetch_assoc($result)) {
    					echo "<br>" . "<img height='150' src='".$row["urlpic"]."'>" . "<br>" . "<br>" .
    						 "Nome de utilizador: " . $row["username"] . "<br>" . 
    		     	 		 "Nome: " . $row["name"] . "<br>" . 
    		 	 	 		 "Aniversário: " . $row["datebirthday"] . "<br>" .
    		 	 	    	 "Cidade: " . $row["hometown"] . "<br>" .
    		 	 			 "Educação: " . $row["school"] . "<br>" .
    		 	 			 "Data de registo: " . $row["datereg"] . "<br>" . 
    		 	 			 "<a href = 'editaruser.php?id=$row[userid]'>Editar utilizador </a>" .
    		 	 			 "<a href = 'eliminaruser.php?id=$row[userid]'>Eliminar utilizador</a>" . "<br>" . "<br>";
    				}
				}
			?>
			
			<div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
			<h2><a href = "admin.php">Voltar</a></h2>
		</fieldset>
	</div>
</body>
</html>