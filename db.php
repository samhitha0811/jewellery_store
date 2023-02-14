<?php
$servername = "localhost";
$username = "root";
$password="";
$dbname = "finalproject";
$link=mysqli_connect($servername, $username,$password,$dbname);
if($link===false)
{
	DIE("ERROR:could not connect.".mysqli_connect_error());
}
   
?>