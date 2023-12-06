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

//SQL query to creating a database in Mysql
$sql="CREATE DATABASE School";
if(mysqli_query($conn,$sql)){
	echo "Database created successfully created";
}else{
	echo "Error! creating database: ".mysql_error($conn);
}
mysqli_close($conn);
?>