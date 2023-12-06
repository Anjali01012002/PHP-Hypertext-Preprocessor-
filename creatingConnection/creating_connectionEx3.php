<?php
$servername="localhost";
$username="root";
$password="";
$dbname="School";

//I am creatinga connection here with MySQL
$conn=mysqli_connect($servername,$username,$password,$dbname);
//i am checking connectionn here
if(!$conn){
	die("connection failed: ".mysql_connect_error());
}

//SQL query to inserting the data in students table i.e. in a database in Mysql
$sql="INSERT INTO students (stname,email,mobile) VALUES ('Gaura','gk@gmail.com','1655554440')";
if(mysqli_query($conn,$sql)){
	echo "New record inserted successfully";
}else{
	echo "Error! ".$sql."<br>".mysql_error($conn);
}
mysqli_close($conn);
?>