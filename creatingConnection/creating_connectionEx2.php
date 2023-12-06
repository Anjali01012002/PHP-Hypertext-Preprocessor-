<?php
$servername="localhost";
$username="root";
$password="";
$dbname="school";

//I am creating a connection here with MySQL
$conn=mysqli_connect($servername,$username,$password,$dbname);
//i am checking connectionn here
if(!$conn){
	die("connection failed: ".mysql_connect_error());
}

//SQL query to creating a table in shool database in Mysql
$sql="CREATE TABLE students(
id INT AUTO_INCREMENT PRIMARY KEY,
stname VARCHAR(30) NOT NULL,
email VARCHAR(40),
mobile VARCHAR(10) NOT NULL
)";
if(mysqli_query($conn,$sql)){
	echo "table students created successfully";
}else{
	echo "Error! creating table: ".mysql_error($conn);
}
mysqli_close($conn);
?>