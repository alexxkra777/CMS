<?php
  include_once "db.php";
  session_start();

  if (isset($_POST["email"])) {
      
    $email = $_POST["email"];
      
  }else{
    $email = null;
  };
  if (isset($_POST["password"])) {
      
    $password = $_POST["password"];
      
  }else{
    $password = null;
  };


  $zero_session = 0;
  $zero_header = 0;



  if (!preg_match("/[a-zA-Z]/", $email)) {
    $zero_session = 1;
    $zero_header = 1;
  }else{
     $_SESSION["email"] = $email;
  };
  if (!preg_match("/[a-zA-Z]/", $password)) {
    $zero_session = 2;
    $zero_header = 2;
  }else{
    $_SESSION["password"] = $password;
  };
  if (strlen($email) < 6 ) {
    $zero_session = 3;
    $zero_header = 3;
  };
  if (strlen($password) < 8) {
    $zero_session = 4;
    $zero_header = 4;
  };



  
  if ($zero_session > 0) {
    $_SESSION["registr-error"] = "špatně vyplněné údaje";
  }
  if ($zero_header > 0) {
    header("location: login-index.php");
  }



/////////////////////////////////////////////////////////////////////////////////// 
  $array_email = array(
      ':check_email' => $email
  );
  $sql = "SELECT password FROM person_libus WHERE email = :check_email";
  $sql_command = $db->prepare($sql);
  $sql_command->execute($array_email);
  $data = $sql_command->fetchAll(PDO::FETCH_ASSOC);
  foreach ($data as $key => $value) {
      $value["password"];
  };
  $hash = password_verify($password, $value["password"]);


  if ($hash == 1) {
    $array_ID = array(
      ':check_email' => $email
    );
    $ID_check = "SELECT ID FROM person_libus WHERE email = :check_email";

    $sql_command = $db->prepare($ID_check);
    $sql_command->execute($array_ID);
    
    $data_ID = $sql_command->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data_ID as $key => $value) {
       $value["ID"];
    }
    $_SESSION["check_ID"] = $value["ID"];
    header("location: index.php");
  }else{
    header("location: login-index.php");
  };


?>