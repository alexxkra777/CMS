<?php
	include_once "db.php";
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Libuš-Starší Dorost</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="libus.css.php">
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
    		$array = array(
      			':check_email' => $email
   			 ); 
			$ID_check = "SELECT ID FROM person_libus WHERE email = :check_email LIMIT 0,1";

			$sql_command = $db->prepare($ID_check);
			$sql_command->execute($array );
			
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
				$sql = "SELECT * FROM result_libus1 WHERE ID >= 1 AND ID <= 100 ORDER BY ID DESC";
				$sql_command = $db->prepare($sql);
				$sql_command->execute();
				$data = $sql_command->fetchAll(PDO::FETCH_ASSOC);

				//echo"<style>table, tr, td {border: 1px solid black}</style>";
				echo "<table class='table table-dark table-striped'>";
				echo "<td><p id='text-on-table-left'>Domácí</p></td>";
				echo "<td><p id='text-on-table-center-left'>Skóre</p></td>";
				echo "<td></td>";
				echo "<td><p id='text-on-table-center-right'>Skóre</p></td>";
				echo "<td><p id='text-on-table-right'>Hosté</p></td>";
				echo "<td><img src='img/libus.png' height='75px'></td>";
				foreach ($data as $key => $value) {
					echo "<tr>";
					//echo "<td>".$value["ID"]."</td>";
					echo "<td><p class='text-in-table-left'>".$value["club1"]."</p></td>";
					echo "<td><p class='text-in-table-center-left'>".$value["result1"]."</p></td>";
					echo "<td><p class='text-in-table-center'>:<p/></td>";
					echo "<td><p class='text-in-table-center-right'>".$value["result2"]."</p></td>";
					echo "<td><p class='text-in-table-right'>".$value["club2"]."</p></td>";
					echo "<td><img src='img/libus.png' height='75px'></td>";
				};
				echo "</tr>";
				echo"</table>";
				echo $value["ID"];
		}else{
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
			          			echo "<a class='nav-link fs-3' href='login-index.php'>Přihlášení</a>";
			        		echo "</li>";
			      		echo "</ul>";
			    	echo "</div>";
			  	echo "</div>";
				echo "</nav>";
				$sql = "SELECT * FROM result_libus1 WHERE ID >= 1 AND ID <= 100 ORDER BY ID DESC";
				$sql_command = $db->prepare($sql);
				$sql_command->execute();
				$data = $sql_command->fetchAll(PDO::FETCH_ASSOC);

				echo "<table class='table table-dark table-striped'>";
				echo "<td><p id='text-on-table-left'>Domácí</p></td>";
				echo "<td><p id='text-on-table-center-left'>Skóre</p></td>";
				echo "<td></td>";
				echo "<td><p id='text-on-table-center-right'>Skóre</p></td>";
				echo "<td><p id='text-on-table-right'>Hosté</p></td>";
				echo "<td><img src='img/libus.png' height='75px'></td>";
				foreach ($data as $key => $value) {
					echo "<tr>";
					echo "<td><p class='text-in-table-left'>".$value["club1"]."</p></td>";
					echo "<td><p class='text-in-table-center-left'>".$value["result1"]."</p></td>";
					echo "<td><p class='text-in-table-center'>:<p/></td>";
					echo "<td><p class='text-in-table-center-right'>".$value["result2"]."</p></td>";
					echo "<td><p class='text-in-table-right'>".$value["club2"]."</p></td>";
					echo "<td><img src='img/libus.png' height='75px'></td>";
				};
				echo "</tr>";
				echo"</table>";
		}		

	?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>