<?php
   include("config.php");
   session_start();
   $error='';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT userid FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         if($myusername == "admin"){
            $_SESSION['login_user'] = $myusername;
            header("location: admin.php");
         } else {
            $_SESSION['login_user'] = $myusername;
            header("location: users.php?id=$row[userid]");
         }
      } else {
         $error = "Nome de utilizador ou palavra passe incorretos.";
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
         <legend>Login</legend>
         
         <form action = "" method = "post">
            <table>
               <tr>
                  <td height="40"><label>nome de utilizador: </label></td>
                  <td><input type = "text" name = "username" class = "box"/></td>
               </tr>
               <tr>
                  <td height="40"><label>palavra-passe: </label></td>
                  <td><input type = "password" name = "password" class = "box" /></td>
               </tr>
            </table>
            <br><br>
            <input type = "submit" value = " Entrar "/><br />
         </form>
         
         <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
      <fieldset>      
   </div>
</body>
</html>