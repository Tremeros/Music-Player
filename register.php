<?php 
  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constans.php");

  $account = new Account($datatabseConnection);


  

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mplayer</title>
</head>
<body>
  <h2>Mplayer</h2>
    <div id="auth_container">
      <?php include("loginForm.php"); ?>
      <?php include("registerForm.php"); ?>       
    </div>
</body>
</html>