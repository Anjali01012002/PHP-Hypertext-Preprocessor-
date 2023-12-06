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
$sql="SELECT id,stname FROM students WHERE mobile=1234567890";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "<b>Id: </b> ".$row["id"]. ", <b>Name: </b> ".$row["stname"];
	}
	
}else{
	echo "no record find";
}
mysqli_close($conn);
?>