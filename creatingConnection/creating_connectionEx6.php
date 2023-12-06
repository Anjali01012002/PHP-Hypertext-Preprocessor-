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

//SQL query to updating record
$sql="UPDATE students SET stname='Mohan' WHERE mobile='1234567890'";

if(mysqli_query($conn,$sql)){
		echo "Record updated successfully";
}
else{
	echo "Error! updating record: ".mysql_error($conn);
}
mysqli_close($conn);
?>