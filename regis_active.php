<?php
	  include_once "db.php";
	  session_start();
	if (isset($_POST["email"])) {
			
		$email = $_POST["email"];
			
		}else{
			$email = null;
	};
	if (isset($_POST["name"])) {
			
		$name = $_POST["name"];
			
		}else{
			$name = null;
	};
	if (isset($_POST["surname"])) {
			
		$surname = $_POST["surname"];
			
		}else{
			$surname = null;
	};
	if (isset($_POST["password_one"])) {
			
			$password_one = $_POST["password_one"];
			
		}else{
			$password_one = null;
	};
	if (isset($_POST["password_two"])) {
			
			$password_two = $_POST["password_two"];
			
		}else{
			$password_two = null;
	};
	if ($password_one == $password_two) {
			$password = $password_one;
	}else{
		header("location: regis.php");
	}
	echo $password;

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
	if (!preg_match("/[a-zA-Z]/", $surname)) {
		$zero_session = 3;
		$zero_header = 3;
	}else{
		$_SESSION["surname"] = $surname;
	};
	if (!preg_match("/[a-zA-Z]/", $name)) {
		$zero_session = 4;
		$zero_header = 4;
	}else{
		$_SESSION["name"] = $name;
	};
	if (strlen($email) > 6 AND strlen($email) < 100) {
		$zero_session = 5;
		$zero_header = 5;
	};
	if (strlen($password) > 8 AND strlen($password) < 100) {
		$zero_session = 6;
		$zero_header = 6;
	};
	if (strlen($name) > 2 AND strlen($name) < 100) {
		$zero_session = 7;
		$zero_header = 7;
	};
	if (strlen($surname) > 2 AND strlen($surname) < 100) {
		$zero_session = 8;
		$zero_header = 8;
	};


	
	if ($zero_session > 0) {
		$_SESSION["registr-error"] = "špatně vyplněné údaje";
	}
	if ($zero_header > 0) {
		header("location: regis.php");
	}


//////////////////////////////////////////////////////////////////////
	$Email_check = "SELECT email FROM person_libus WHERE email = '$email' LIMIT 0,1";

	$sql_command = $db->prepare($Email_check);
	$sql_command->execute();
	$data_email = $sql_command->fetchAll(PDO::FETCH_ASSOC);

	$finish_email_check = count($data_email);
	$hashed = password_hash($password, PASSWORD_DEFAULT);
	if ($finish_email_check == 0) {			
		
		$array = array(
			':insert_name' => $name,
			':insert_surname' => $surname,
			':insert_email' => $email, 
			':insert_password' => $hashed
		);
		$sql = "INSERT INTO person_libus (name, surname, email, password) VALUES (:insert_name, :insert_surname, :insert_email, :insert_password)";
		$sql_prov = $db->prepare($sql);
		$sql_prov->execute($array);


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
			header("location: regis.php");
		}