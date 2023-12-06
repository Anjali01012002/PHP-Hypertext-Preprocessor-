<?php
$servername="localhost";
$username="root";
$password="";

//I am creatinga connection here with MySQL
$conn=mysqli_connect($servername,$username,$password);
//i am checking connectionn here
if(!$conn){
	die("connection failed: ".mysql_connect_error());
}
echo "Connected successfully";
?>