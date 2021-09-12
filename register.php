<?php 

$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
if(isset($_POST['loginButton'])) {
  echo $_POST['loginUserame'];
}

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
    <div id="auth_container">
      <?php include($DOCUMENT_ROOT. '/mplayer/loginForm.php'); ?>
      <?php include($DOCUMENT_ROOT. '/mplayer/registerForm.php'); ?>       
    </div>
</body>
</html>