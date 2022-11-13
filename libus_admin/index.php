<?php
	include_once "db.php";
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="admin.php.css">
</head>
<body>
	<?php
			$email = $_SESSION["email"]; 
			$password =  $_SESSION["password"];
			$ID_check = "SELECT ID FROM admin_libus WHERE email = '$email' AND password = '$password' LIMIT 0,1";

			$sql_command = $db->prepare($ID_check);
			$sql_command->execute();
			
			$data_ID = $sql_command->fetchAll(PDO::FETCH_ASSOC);
			foreach ($data_ID as $key => $value) {
				 $value["ID"];
			};

		if ($value["ID"] = $_SESSION["check_ID"]) {
			echo "<div class='container'>";
				echo "<div id='cont'";
					echo "<div class='row'>";
						echo "<div class='col'>";
							echo "<form action='admin_active.php' method='post'>";
							echo "<input type='name' name='name_one' placeholder='Tým' class='form-control'>";
							echo "<input type='number' name='number_one' min='0' max='20' placeholder='Skóre' class='form-control'>";
						echo "</div>";	
							echo "<br>";
						echo "<div class='col'>";	
							echo "<input type='name' name='name_two' placeholder='Tým' class='form-control'>";
							echo "<input type='number' name='number_two' min='0' max='20' placeholder='Skóre' class='form-control'>";
						echo "</div>";	
							echo "<br>";
						echo "<div class='d-grid gap-2'>";	
							echo "<input type='submit' name='sub' class='btn btn-primary'>";
						echo "</div>";	
							echo "</form>";	
					echo "</div>";
				echo "</div>";	
			echo "</div>";
			echo "<div class='container'>";	
				echo "<div id='cont-table'>";
					$sql = "SELECT * FROM result_libus1";
					$sql_command = $db->prepare($sql);
					$sql_command->execute();
					$data = $sql_command->fetchAll(PDO::FETCH_ASSOC);

					echo"<style>table, tr, td {border: 1px solid black}</style>";
					echo "<table class='table table-striped table-success'>";
						foreach ($data as $key => $value) {
							echo "<tr>";
							echo "<td>".$value["club1"]."</td>";
							echo "<td>".$value["result1"]."</td>";
							echo "<td>".$value["club2"]."</td>";
							echo "<td>".$value["result2"]."</td>";
							echo "<td id=\"delet\"><a href=\"delete_chat.php?id_del=".$value["ID"]."\">smazat</a></td>";
						};
					echo "</tr>";
					echo"</table>";
					echo "<div id='cont-table'>";


					$sql = "SELECT * FROM chat_libus";
					$sql_command = $db->prepare($sql);
					$sql_command->execute();
					$data = $sql_command->fetchAll(PDO::FETCH_ASSOC);

					echo"<style>table, tr, td {border: 1px solid black}</style>";
					echo "<table class='table table-striped table-success'>";
						foreach ($data as $key => $value) {
							echo "<tr>";
							echo "<td>".$value["name"]."</td>";
							echo "<td>".$value["surname"]."</td>";
							echo "<td>".$value["chat"]."</td>";
							echo "<td id=\"delet\"><a href=\"delete_chat.php?id_del=".$value["ID"]."\">smazat</a></td>";
						};
					echo "</tr>";
					echo"</table>";
				echo "</div>";		
			echo "</div>";	
		}else{
			header("location: login-admin.php");
		}
	?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>