<?php
	include_once "db.php";
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Zápasy</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="zapasy.css.php">
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
			$ID_check = "SELECT ID FROM admin_libus WHERE email = '$email' AND password = '$password' LIMIT 0,1";

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
					echo "<table class='table table-dark table-striped'>";
					echo "<tr>";
						echo "<th>  Datum </th>";
						echo "<th>  čas </th>";
						echo "<th>  Domácí </th>";
						echo "<th>  Hosté </th>";
						echo "<th>  Hřiště / Info </th>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  14. 08. So </td>";
						echo "<td>  13:00 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  FK FC Zličín </td>";
						echo "<td>  Libuš - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  22. 08. Ne </td>";
						echo "<td>  15:00 </td>";
						echo "<td>  FC Tempo Praha B </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Tempo - UMT </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  28. 08. So </td>";
						echo "<td>  16:45 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  SK Hostivař </td>";
						echo "<td>  Libuš - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  04. 09. So </td>";
						echo "<td>  13:00 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  SK Union Vršovice </td>";
						echo "<td>  Libuš - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  12. 09. Ne </td>";
						echo "<td>  14:00 </td>";
						echo "<td>  Spartak Kbely </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Kbely - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  18. 09. So </td>";
						echo "<td>  13:00 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  SK Ďáblice </td>";
						echo "<td>  Libuš - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  22. 09. St </td>";
						echo "<td>  16:30 </td>";
						echo "<td>  FK Dukla JM </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  II. kolo poháru PFS </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  26. 09. Ne </td>";
						echo "<td>  10:30 </td>";
						echo "<td>  TJ Slovan Bohnice </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Bohnice - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  28. 09. Út </td>";
						echo "<td>  16:30 </td>";
						echo "<td>  SK Zbraslav </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Zbraslav - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  02. 10. So </td>";
						echo "<td>  14:45 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Junior Praha 1960 </td>";
						echo "<td>  Libuš - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  10. 10. Ne </td>";
						echo "<td>  16:00 </td>";
						echo "<td>  FC Přední Kopanina </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Př. Kopanina - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  16. 10. So </td>";
						echo "<td>  15:15 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  SK Dolní Chabry </td>";
						echo "<td>  Libuš - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  23. 10. So </td>";
						echo "<td>  09:00 </td>";
						echo "<td>  SC Xaverov </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Xaverov - UMT </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  30. 10. So </td>";
						echo "<td>  13:00 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  TJ Sokol Bílá Hora </td>";
						echo "<td>  Libuš - tráva </td>";
						echo " </tr>";
					echo "</table>";
				echo "</div>";	
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
				echo "<div class='container'>";
					echo "<table class='table table-dark table-striped'1>";
					echo "<tr>";
						echo "<th>  Datum </th>";
						echo "<th>  čas </th>";
						echo "<th>  Domácí </th>";
						echo "<th>  Hosté </th>";
						echo "<th>  Hřiště / Info </th>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  14. 08. So </td>";
						echo "<td>  13:00 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  FK FC Zličín </td>";
						echo "<td>  Libuš - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  22. 08. Ne </td>";
						echo "<td>  15:00 </td>";
						echo "<td>  FC Tempo Praha B </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Tempo - UMT </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  28. 08. So </td>";
						echo "<td>  16:45 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  SK Hostivař </td>";
						echo "<td>  Libuš - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  04. 09. So </td>";
						echo "<td>  13:00 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  SK Union Vršovice </td>";
						echo "<td>  Libuš - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  12. 09. Ne </td>";
						echo "<td>  14:00 </td>";
						echo "<td>  Spartak Kbely </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Kbely - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  18. 09. So </td>";
						echo "<td>  13:00 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  SK Ďáblice </td>";
						echo "<td>  Libuš - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  22. 09. St </td>";
						echo "<td>  16:30 </td>";
						echo "<td>  FK Dukla JM </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  II. kolo poháru PFS </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  26. 09. Ne </td>";
						echo "<td>  10:30 </td>";
						echo "<td>  TJ Slovan Bohnice </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Bohnice - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  28. 09. Út </td>";
						echo "<td>  16:30 </td>";
						echo "<td>  SK Zbraslav </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Zbraslav - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  02. 10. So </td>";
						echo "<td>  14:45 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Junior Praha 1960 </td>";
						echo "<td>  Libuš - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  10. 10. Ne </td>";
						echo "<td>  16:00 </td>";
						echo "<td>  FC Přední Kopanina </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Př. Kopanina - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  16. 10. So </td>";
						echo "<td>  15:15 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  SK Dolní Chabry </td>";
						echo "<td>  Libuš - tráva </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  23. 10. So </td>";
						echo "<td>  09:00 </td>";
						echo "<td>  SC Xaverov </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  Xaverov - UMT </td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>  30. 10. So </td>";
						echo "<td>  13:00 </td>";
						echo "<td>  SK Libuš </td>";
						echo "<td>  TJ Sokol Bílá Hora </td>";
						echo "<td>  Libuš - tráva </td>";
						echo " </tr>";
					echo "</table>";
				echo "</div>";	
		}	



?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>