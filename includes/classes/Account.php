<?php

class Account {

    private $errorArray;
    private $datatabseConnection;

public function __construct($datatabseConnection) {
   $this->datatabseConnection = $datatabseConnection;
   $this->errorArray = array();
}

public function register($un, $na, $ln, $re, $ce, $de, $rpass, $rcpass) {
    $this->validateUsername($un);
    $this->validateName($na);
    $this->validateLastname($ln);
    $this->validateEmails($re, $ce);
    $this->validatePasswords($rpass, $rcpass);



    if(empty($this->errorArray) == true) {
        // Insert into DB
        $encryptedPassword = md5($rpass);
  $profilePic = "assets/images/profile-pics/profile-pic.jpg";
  $date = date("Y-m-d");



 
  $result = mysqli_query($this->datatabseConnection, "INSERT INTO users VALUES (NULL, '$un', '$na', '$ln', '$re', '$de', '$encryptedPassword', '$date', '$profilePic')");

  return $result;
      
      
      
    } else {
        return false;
    }
}

public function getError($error) {
  if(!in_array($error, $this->errorArray)) {
    $error = "";
  }
  return "<span class=errorMessage>$error</span>";
}

public function getInputValue($name) {
  if(isset($_POST[$name])) {
    echo $_POST[$name];
  }
}

// private function registerUser() {
//   $encryptedPassword = md5($rpass);
//   $profilePic = "assets/images/profile-pics/profile-pic.jpg";
//   $date = date("Y-m-d");



 
//   $result = mysqli_query($this->datatabseConnection, "INSERT INTO users VALUES (NULL, '$un', '$na', '$ln', '$re', '$de', '$encryptedPassword', '$date', '$profilePic')");

//   return $result;
// }

// private function insertUserDetails($un, $na, $ln, $re, $de, $rpass) {
//    $encryptedPassword = md5($rpass);
//    $profilePic = "assets/images/profile-pics/profile-pic.jpg";
//    $date = date("Y-m-d");

 

//    echo "INSERT INTO users VALUES (NULL, '$un', '$na', '$ln', '$re', '$de', '$encryptedPassword', '$date', '$profilePic')";
//    $result = mysqli_query($this->datatabseConnection, "INSERT INTO users VALUES (NULL, '$un', '$na', '$ln', '$re', '$de', '$encryptedPassword', '$date', '$profilePic')");

//    return $result;
// }





private function validateUsername($un) {
  if(strlen($un) > 25 || strlen($un) < 5) {
     array_push($this->errorArray, "Your username must be between 5 and 25 characters");
     return;
  }
}

private function validateName($na) {
    if(strlen($na) > 25 || strlen($na) < 2) {
        array_push($this->errorArray, "Your first name must be between 2 and 25 characters");
        return;
     }
}

private function validateLastname($ln) {
    if(strlen($ln) > 25 || strlen($ln) < 2) {
        array_push($this->errorArray, "Your last name must be between 2 and 25 characters");
        return;
     }
}

private function validateEmails($re, $ce) {
      if($re != $ce) {
        array_push($this->errorArray, "Emails do not match");
        return;
      }

      if(!filter_var($re, FILTER_VALIDATE_EMAIL)){
        array_push($this->errorArray, "Incorrect email format");
        return;
      }
}



private function validatePasswords($rpass, $rcpass) {
    if($rpass != $rcpass) {
        array_push($this->errorArray, "Passwords do not match");
        return;
      }

      if(preg_match('/[^A-Za-z0-9]/', $rpass)) {
        array_push($this->errorArray, "Passwords can only contains numbers and letters");
        return;
      }

      if(strlen($rpass) > 30 || strlen($rpass) < 6) {
        array_push($this->errorArray, "Your password must be between 6 and 30 characters");
        return;
     }
}
}


?>