<?php
	include_once "db.php";
	session_start();
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
	if (isset($_POST["text"])) {
			
		$text = $_POST["text"];
			
		}else{
			$text = null;
	};


	if (!preg_match("/[a-zA-Z]/", $text)) {
		$zero_session = 1;
		$zero_header = 1;
	};
	if (strlen($text) > 2 AND strlen($text) < 10000) {
		$zero_session = 2;
		$zero_header = 2;
	};


	
	if ($zero_session > 0) {
		$_SESSION["registr-error"] = "špatně vyplněné údaje";
	}
	if ($zero_header > 0) {
		header("location: regis.php");
	}


//////////////////////////////////////////////////////////////////////			
		$array = array(
			':insert_name' => $name,
			':insert_surname' => $surname,
			':insert_text' => $text
		);
		$sql = "INSERT INTO chat_libus (name, surname, chat) VALUES (:insert_name, :insert_surname, :insert_text)";
		$sql_prov = $db->prepare($sql);
		$sql_prov->execute($array);
		header("location: chat.php");
?>		