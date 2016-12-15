<?php
  include('session.php');
  $error = "";
  $id = htmlspecialchars($_GET["id"]);

  $form = "SELECT * FROM users WHERE userid = $id";
  $result = mysqli_query($db,$form);
  $row = mysqli_fetch_assoc($result);

  if($_SERVER["REQUEST_METHOD"] == "POST") {

    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
    $myname = mysqli_real_escape_string($db,$_POST['name']);
    $myemail = mysqli_real_escape_string($db,$_POST['email']);
    $mydatebirthday = mysqli_real_escape_string($db,$_POST['datebirthday']);
    $myhometown = mysqli_real_escape_string($db,$_POST['hometown']);
    $myschool = mysqli_real_escape_string($db,$_POST['school']);
    $myurlpic = mysqli_real_escape_string($db,$_POST['urlpic']);

    $sql = "UPDATE users " . 
           "SET password = '$mypassword', name = '$myname', email = '$myemail', datebirthday = '$mydatebirthday', hometown = '$myhometown', school = '$myschool', urlpic = '$myurlpic'" . 
           "WHERE userid = $id";

    if (mysqli_query($db, $sql)) {
      header("Location: verusers.php");
    } else {
      $error = "Erro a editar o utilizador: " . mysqli_error($db);
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
      <legend>Editar perfil de <?php echo $login_session; ?></legend>

      <form action = "" method = "post">
        <table>
          <tr>
            <td><label>Nome  :</label></td>
            <td><input type = "text" name = "name" class = "box" value="<?php echo $row["name"] ?>"/></td>
          </tr>
          <tr>
            <td><label>Password  :</label></td>
            <td><input type = "password" name = "password" class = "box" value="<?php echo $row["password"] ?>"/></td>
          </tr>
          <tr>
            <td><label>Email  :</label></td>
            <td><input type = "text" name = "email" class = "box" value="<?php echo $row["email"] ?>"/></td>
          </tr>
          <tr>
            <td><label>Aniversário  :</label></td>
            <td><input type = "text" name = "datebirthday" class = "box" value="<?php echo $row["datebirthday"] ?>"/></td>
          </tr>
          <tr>
            <td><label>Cidade  :</label></td>
            <td><input type = "text" name = "hometown" class = "box" value="<?php echo $row["hometown"] ?>"/></td>
          </tr>
          <tr>
            <td><label>Educação  :</label></td>
            <td><input type = "text" name = "school" class = "box" value="<?php echo $row["school"] ?>"/></td>
          </tr>
          <tr>
            <td><label>Foto de perfil  :</label></td>
            <td><input type = "text" name = "urlpic" class = "box" value="<?php echo $row["urlpic"] ?>"/></td>
          </tr>
        </table>
        <br><br>
        <input type = "submit" value = " Editar "/><br />
      </form>
               
      <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>         
    <fieldset>      
  </div>
</body>
</html>