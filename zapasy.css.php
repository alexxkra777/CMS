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
#text-on-table-left{
  margin-left: 70px;
  font-size: 30px;
  font-weight: bold;
}
#text-on-table-center-left{
  margin-left: -80px;
  font-size: 30px;
  font-weight: bold;  
}
#text-on-table-center-right{
  margin-left: 15px;
  font-size: 30px;
  font-weight: bold; 
}
#text-on-table-right{
  font-size: 30px;
  font-weight: bold;
}
.text-in-table-left{
  margin-left: 80px;
  font-size: 20px;
}
.text-in-table-center-left{
  margin-left: -50px;
  font-size: 20px;
}
.text-in-table-center{
  margin-left: 0px;
  font-size: 25px;
   font-weight: bold;
}
.text-in-table-center-right{
  margin-left: 48px;
  font-size: 20px;
}
.text-in-table-right{
  margin-left: 15px;
  font-size: 20px;
}
@media (min-width: 768px){
  .container, .container-md, .container-sm {
     max-width: 1000px;
  }
}