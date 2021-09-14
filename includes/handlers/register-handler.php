<?php 


function sanitazeFormPassword($inputPassword) {
  $$inputPassword = strip_tags($inputPassword);
  return $inputPassword;
}

function sanitazeFormInputs($inputText) {
  $$inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  return $inputText;
}

function sanitazeFormString($inputString) {
  $$inputString = strip_tags($inputString);
  $inputString = str_replace(" ", "", $inputString);
  $inputString = ucfirst(strtolower($inputString));
  return $inputString;
}


if(isset($_POST['registerButton'])) {
  $username = sanitazeFormInputs($_POST['username']);
  $name = sanitazeFormString($_POST['name']);
  $lastName  = sanitazeFormString($_POST['lastName']);
  $registerEmail = sanitazeFormString($_POST['registerEmail']);
  $confirmEmail = sanitazeFormString($_POST['confirmEmail']);
  $description = sanitazeFormInputs($_POST['description']);
  $registerPassword = sanitazeFormPassword($_POST['registerPassword']);
  $registerConfirmPassword = sanitazeFormPassword($_POST['registerConfirmPassword']);

  $wasSuccessfull = $account->register($username, $name, $lastName, $registerEmail, $confirmEmail, $registerPassword, $registerConfirmPassword);

  if($wasSuccessfull) {
    header('Location: index.php');
  }
  
}

?>