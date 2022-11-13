<?php
	include_once "db.php";
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Libuš-Starší Dorost</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="soupiska.css.php">
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
				echo"<div class='box'>";
					echo"<div>";
						echo"<img src='img/borovicka.jpg'>";
						echo"<p class='name'>1. Borovička Jiří</p><br>";
						echo"<p class='position'>Brankář</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/durinikm.jpg'>";
						echo"<p class='name'>20. Ďuriník M. Matyáš</p><br>";
						echo"<p class='position'>Brankář</p>";
					echo"</div>";
				echo"</div>";	
				echo"<div class='box'>";
					echo"<div>";
						echo"<img src='img/kumsa.jpg'>";
						echo"<p class='name'>2. Kumsa Abdi</p><br>";
						echo"<p class='position'>Obránce</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/pelant.jpg'>";
						echo"<p class='name'>3. Pelant Ondřej</p><br>";
						echo"<p class='position'>Obránce</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/fialka.jpg'>";
						echo"<p class='name'>4. Fialka Jiří</p><br>";
						echo"<p class='position'>Obránce</p>";	
					echo"</div>";
					echo"<div>";
						echo"<img src='img/dorazil.jpg'>";
						echo"<p class='name'>11. Dorazil Vojtěch</p><br>";
						echo"<p class='position'>Obránce</p>";	
					echo"</div>";
				echo"</div>";	
				echo"<div class='box'>";	
					echo"<div>";
						echo"<img src='img/srb.jpg'>";
						echo"<p class='name'>12. Srb Martin</p><br>";
						echo"<p class='position'>Obránce</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/krejci.jpg'>";
						echo"<p class='name'>16. Krejčí Petr ml.</p><br>";
						echo"<p  class='position'>Obránce</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/holub.jpg'>";
						echo"<p class='name'>17. Holub Alfréd ©</p><br>";
						echo"<p class='position'>Obránce</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/tverdyj.jpg'>";
						echo"<p class='name'>23. Tverdyj Daniel</p><br>";
						echo"<p class='position'>Obránce</p>";
					echo"</div>";
				echo"</div>";
				echo"<div class='box'>";	
					echo"<div>";
						echo"<img src='img/hlaves.jpg'>";
						echo"<p class='name'>5. Hlaveš Filip</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/benes.jpg'>";
						echo"<p class='name'>6. Beneš Ondřej</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/krayushkin.jpg'>";
						echo"<p class='name'>7. Krayushkin Alexandr</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/stulik.jpg'>";
						echo"<p class='name'>8. Štulík Vojtěch</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
				echo"</div>";	
				echo"<div class='box'>";	
					echo"<div>";
						echo"<img src='img/kami.jpg'>";
						echo"<p class='name'>10. Davizi Kamran</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/mendik.jpg'>";
						echo"<p class='name'>13. Mendík Martin</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/pham.jpg'>";
						echo"<p class='name'>14. Pham Tomáš</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/dutcak.jpg'>";
						echo"<p class='name'>15. Dutčak Filip</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
				echo"</div>";	
				echo"<div class='box'>";	
					echo"<div>";
						echo"<img src='img/naidr.jpg'>";
						echo"<p class='name'>19. Naidr Jan</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
				echo"</div>";
				echo"<div class='box'>";	
					echo"<div>";
						echo"<img src='img/dang.jpg'>";
						echo"<p class='name'>9. Dang Tung Duong</p><br>";
						echo"<p class='position'>Útočník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/karabynosh.jpg'>";
						echo"<p class='name'>18. Karabynosh Yevh.</p><br>";
						echo"<p class='position'>Útočník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/waiz.jpg'>";
						echo"<p class='name'>21. Waiz Filip</p><br>";
						echo"<p class='position'>Útočník</p>";
					echo"</div>";
				echo"</div>";
				echo"<div class='box'>";	
					echo"<div>";
						echo"<img src='img/moravec.jpg'>";
						echo"<p class='name'>Moravec Tomáš</p><br>";
						echo"<p class='position'>Trenér</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/biro.jpg'>";
						echo"<p class='name'>Bíro Peter</p><br>";
						echo"<p class='position'>Trenér</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/krejcist.jpg'>";
						echo"<p class='name'>Krejčí Petr st.</p><br>";
						echo"<p class='position'>Trenér a vedoucí</p>";
					echo"</div>";
				echo"</div>";
				
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
				echo"<div class='box'>";
					echo"<div>";
						echo"<img src='img/borovicka.jpg'>";
						echo"<p class='name'>1. Borovička Jiří</p><br>";
						echo"<p class='position'>Brankář</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/durinikm.jpg'>";
						echo"<p class='name'>20. Ďuriník M. Matyáš</p><br>";
						echo"<p class='position'>Brankář</p>";
					echo"</div>";
				echo"</div>";	
				echo"<div class='box'>";
					echo"<div>";
						echo"<img src='img/kumsa.jpg'>";
						echo"<p class='name'>2. Kumsa Abdi</p><br>";
						echo"<p class='position'>Obránce</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/pelant.jpg'>";
						echo"<p class='name'>3. Pelant Ondřej</p><br>";
						echo"<p class='position'>Obránce</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/fialka.jpg'>";
						echo"<p class='name'>4. Fialka Jiří</p><br>";
						echo"<p class='position'>Obránce</p>";	
					echo"</div>";
					echo"<div>";
						echo"<img src='img/dorazil.jpg'>";
						echo"<p class='name'>11. Dorazil Vojtěch</p><br>";
						echo"<p class='position'>Obránce</p>";	
					echo"</div>";
				echo"</div>";	
				echo"<div class='box'>";	
					echo"<div>";
						echo"<img src='img/srb.jpg'>";
						echo"<p class='name'>12. Srb Martin</p><br>";
						echo"<p class='position'>Obránce</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/krejci.jpg'>";
						echo"<p class='name'>16. Krejčí Petr ml.</p><br>";
						echo"<p  class='position'>Obránce</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/holub.jpg'>";
						echo"<p class='name'>17. Holub Alfréd ©</p><br>";
						echo"<p class='position'>Obránce</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/tverdyj.jpg'>";
						echo"<p class='name'>23. Tverdyj Daniel</p><br>";
						echo"<p class='position'>Obránce</p>";
					echo"</div>";
				echo"</div>";
				echo"<div class='box'>";	
					echo"<div>";
						echo"<img src='img/hlaves.jpg'>";
						echo"<p class='name'>5. Hlaveš Filip</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/benes.jpg'>";
						echo"<p class='name'>6. Beneš Ondřej</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/krayushkin.jpg'>";
						echo"<p class='name'>7. Krayushkin Alexandr</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/stulik.jpg'>";
						echo"<p class='name'>8. Štulík Vojtěch</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
				echo"</div>";	
				echo"<div class='box'>";	
					echo"<div>";
						echo"<img src='img/kami.jpg'>";
						echo"<p class='name'>10. Davizi Kamran</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/mendik.jpg'>";
						echo"<p class='name'>13. Mendík Martin</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/pham.jpg'>";
						echo"<p class='name'>14. Pham Tomáš</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/dutcak.jpg'>";
						echo"<p class='name'>15. Dutčak Filip</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
				echo"</div>";	
				echo"<div class='box'>";	
					echo"<div>";
						echo"<img src='img/naidr.jpg'>";
						echo"<p class='name'>19. Naidr Jan</p><br>";
						echo"<p class='position'>Záložník</p>";
					echo"</div>";
				echo"</div>";
				echo"<div class='box'>";	
					echo"<div>";
						echo"<img src='img/dang.jpg'>";
						echo"<p class='name'>9. Dang Tung Duong</p><br>";
						echo"<p class='position'>Útočník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/karabynosh.jpg'>";
						echo"<p class='name'>18. Karabynosh Yevh.</p><br>";
						echo"<p class='position'>Útočník</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/waiz.jpg'>";
						echo"<p class='name'>21. Waiz Filip</p><br>";
						echo"<p class='position'>Útočník</p>";
					echo"</div>";
				echo"</div>";
				echo"<div class='box'>";	
					echo"<div>";
						echo"<img src='img/moravec.jpg'>";
						echo"<p class='name'>Moravec Tomáš</p><br>";
						echo"<p class='position'>Trenér</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/biro.jpg'>";
						echo"<p class='name'>Bíro Peter</p><br>";
						echo"<p class='position'>Trenér</p>";
					echo"</div>";
					echo"<div>";
						echo"<img src='img/krejcist.jpg'>";
						echo"<p class='name'>Krejčí Petr st.</p><br>";
						echo"<p class='position'>Trenér a vedoucí</p>";
					echo"</div>";
				echo"</div>";
		}	

	?>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>