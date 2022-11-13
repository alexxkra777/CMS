<?php
	include_once "db.php";
	session_start();

	if (isset($_POST["name_one"])) {
			
		$name_one = $_POST["name_one"];
			
	}else{
		$name_one = null;
	};
	if (isset($_POST["number_one"]) AND is_numeric($_POST["number_one"])) {
			
		$number_one = $_POST["number_one"];
			
	}else{
		$number_one = null;
	};
	if (isset($_POST["name_two"])) {
			
		$name_two = $_POST["name_two"];
			
	}else{
		$name_two = null;
	};
	if (isset($_POST["number_two"]) AND is_numeric($_POST["number_two"])) {
			
		$number_two = $_POST["number_two"];
			
	}else{
		$number_two = null;
	};

	$zero_session = 0;
	$zero_header = 0;

	if (!preg_match("/[a-zA-Z]/", $name_one)) {
		$zero_session = 1;
		$zero_header = 1;
	};
	if (!preg_match("/[a-zA-Z]/", $name_two)) {
		$zero_session = 2;
		$zero_header = 2;
	};
	if (strlen($name_one) < 3) {
		$zero_session = 3;
		$zero_header = 3;
	};
	if (strlen($number_one) < 1) {
		$zero_session = 4;
		$zero_header = 4;
	};
	if (strlen($name_two) < 3) {
		$zero_session = 5;
		$zero_header = 5;
	};
	if (strlen($number_two) < 1) {
		$zero_session = 6;
		$zero_header = 6;
	};



	
	if ($zero_session > 0) {
		$_SESSION["registr-error"] = "špatně vyplněné údaje";
	}
	if ($zero_header > 0) {
		header("location: index.php");
	}

	///////////////////////////////////////////////////////////

	$array = array(
			':insert_name_one' => $name_one,
			':insert_number_one' => $number_one,
			':insert_name_two' => $name_two,
			':insert_number_two' => $number_two
	);
	$sql = "INSERT INTO result_libus1 (club1, result1, club2, result2) VALUES (:insert_name_one, :insert_number_one, :insert_name_two, :insert_number_two)";
		$sql_prov = $db->prepare($sql);
		$sql_prov->execute($array);

	header("location: index.php");

?>







