<?php
    header('Content-type: text/css; charset: UTF-8');
 ?>
 *{
  font-family: "Poppins", sans-serif;
}
body{
  align-items: center;
  justify-content: center;
  background: #212529;
}
.navbar{
	height: 100px;
	background: #0e6d38;
}
.navbar a{
	color: white;
}
.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
    background: #0e6d38;
}    
.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0;
    margin-left: 13px;
}
.navbar-light .navbar-brand{
  color: white;
}
.navbar-light .navbar-brand:hover{
  color: #0e4125;
}
.navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link{
  color: white;
  font-weight: bold;
}
.navbar-light .navbar-nav .nav-link{
  color: white;
}
.navbar-light .navbar-nav .nav-link:hover{
  color: #0e4125;
}
#acc{
 display: flex;
  justify-content: center;
  margin: 0px auto;
  height: 350px;
  width: 1000px;
  background: #0e6d38;
  border: solid white;
}
#acc ul{
  list-style: none;
}
#acc input[type=name]{
  color: white;
  background: #0e4125;
  border: solid white;
  margin-top: 5px;
  margin-right: 5px;
  margin-bottom: 5px;
}
#acc input[type=surname]{
  color: white;
  background: #0e4125;
  border: solid white;
  margin-top: 5px;
}
#acc textarea{
  color: white;
  background: #0e4125;
  border: solid white;
}
#acc input[type=submit]{
  background: white;
  border: solid white;
  margin-left: 500px;
  border-radius: 10px;
  font-size: 20px;
}
#table td{
  background: #2c3034;
  color: white;

}
@media only screen and (max-width: 1200px) {
  #acc{
  display: flex;
  justify-content: center;
  margin: 0px auto;
  height: 350px;
  width: 695px;
  background: #0e6d38;
  border: solid white;
  }
  #acc input[type=submit]{
  background: white;
  border: solid white;
  margin-left: 350px;
  border-radius: 10px;
  font-size: 20px;
}
}
