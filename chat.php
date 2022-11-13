<?php
	include_once "db.php";
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Libuš-Starší Dorost</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="chat.css.php">
</head>
<body>
<?php	
			if (isset($_SESSION["email"])) {
				
				$email = $_SESSION["email"];
				
			}else{
				$email = null;
			};
			if (isset($_SESSION["password"])) {
				
				$password = $_SESSION["password"];
				
			}else{
				$password = null;
			};
			if (isset($_SESSION["check_ID"])) {
				
				$check_ID = $_SESSION["check_ID"];
				
			}else{
				$check_ID = null;
			};
			if (isset($_SESSION["name"])) {
				
				$name = $_SESSION["name"];
				
			}else{
				$name = null;
			};
			if (isset($_SESSION["surname"])) {
				
				$surname = $_SESSION["surname"];
				
			}else{
				$surname = null;
			};   
			$ID_check = "SELECT ID FROM person_libus WHERE email = '$email' AND password = '$password' LIMIT 0,1";

			$sql_command = $db->prepare($ID_check);
			$sql_command->execute();
			
			$data_ID = $sql_command->fetchAll(PDO::FETCH_ASSOC);
			foreach ($data_ID as $key => $value) {
				 $value["ID"];
			};

		if ($value["ID"] = $check_ID) {
			$account = $email;
			echo "<nav class='navbar navbar-expand-lg navbar-light bg-#0e6d38'>";
			echo "<div class='container-fluid' style='height: 75px;'>";
			    	echo "<a class='navbar-brand fs-2' href='index.php'>
			    			Libuš-Starší Dorost	
			    		</a>";
			   		 echo "<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>";
			     	echo "<span class='navbar-toggler-icon'></span>";
			    	echo "</button>";
			   		echo "<div class='collapse navbar-collapse justify-content-end' id='navbarNavDropdown'>";
			     		echo "<ul class='navbar-nav'>";
			     			echo " <li class='nav-item light-hover'>";
			         			echo "<a class='nav-link fs-3' href='chat.php'>Chat</a>";
			       			echo " </li>";
			       			echo "<li class='nav-item light-hover'>";
			         			echo "<a class='nav-link active fs-3' aria-current='page' id='o-nas-navbar' href='index.php'>Výsledky</a>";
			        		echo "</li>";
			       			echo " <li class='nav-item light-hover'>";
			         			echo "<a class='nav-link fs-3' href='zapasy.php'>Zápasy</a>";
			       			echo " </li>";
			       			echo "<li class='nav-item light-hover'>";
			          			echo "<a class='nav-link fs-3' href='soupiska.php'>Soupiska</a>";
			        		echo "</li>";
			        		echo " <li class='nav-item light-hover'>";
			          			echo "<a class='nav-link fs-3' href='account.php'><img src='img/user_icon.png' style='height: 50px;'></a>";
			        		echo "</li>";
			      		echo "</ul>";
			    	echo "</div>";
			 echo "</div>";
			echo "</nav>";
			echo "<div class='container'>";
				echo "<div id='acc'>";
					echo "<form action='chat_active.php' method='post'>";
						echo "<ul>";
							echo "<li>";
								echo "<input type='name' name='name' placeholder='Name'>";
								echo "<input type='surname' name='surname' placeholder='Surname'>";
							echo "</li>";
							echo "<li><textarea name='text' rows='10' cols='70'></textarea></li>";
							echo "<li><input type='submit' name='sub'></li>";
						echo "</ul>";
					echo "</form>";	
				echo "</div>";
				$sql = "SELECT * FROM chat_libus WHERE ID >= 1 AND ID <= 100 ORDER BY ID DESC";
				$sql_command = $db->prepare($sql);
				$sql_command->execute();
				$data = $sql_command->fetchAll(PDO::FETCH_ASSOC);

				echo "<table class='table'>";
				foreach ($data as $key => $value) {
					echo "<tr id='table'>";
					//echo "<td>".$value["ID"]."</td>";
					echo "<td><p>".$value["name"]."</p></td>";
					echo "<td><p>".$value["surname"]."</p></td>";
					echo "<td><p>".$value["chat"]."</p></td>";
				};
				echo "</tr>";
				echo"</table>";
			echo "</div>";
		}else{
			header("location: index.php");	
		}		

	?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>