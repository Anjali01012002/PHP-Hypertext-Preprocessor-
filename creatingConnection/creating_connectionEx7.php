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

//SQL query to deleting record
$sql="DELETE FROM students WHERE id=1";

if(mysqli_query($conn,$sql)){
		echo "Record deleted successfully";
}
else{
	echo "Error! deleting record: ".mysql_error($conn);
}
mysqli_close($conn);
?>