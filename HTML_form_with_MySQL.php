<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<style type="text/css">
		.errorColor{
			color: #D30000;
		}
	</style>
</head>
<body>
	<?php
	//all required variable here
	$nameError=$emailError="";
	$name=$email=$message=$submitted="";
	if($_SERVER["REQUEST_METHOD"]=="POST") {
		if (empty($_POST["name"])) {
			$nameError="name is mandatory";
		}else{
			$name=test_input($_POST["name"]);
			//check if name only contains letters and whitespaces
			if(!preg_match("/^[a-zA-Z-']*$/",$name)){
				$nameError="only letters allowed";
			}
		}

		if (empty($_POST["email"])) {
			$emailError="email is mandatory";
		}else{
			$name=test_input($_POST["email"]);
			//check if email address is well-format
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$emailError="Invalid email format";
			}
		}

		if(empty($_POST["message"])){
			$message="";
		}else{
			$message=test_input($_POST["message"]);
		}

		$submitted=test_input($_POST["submitted"]);
	}

	function test_input($data)
	{
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

	$servername="localhost";
	$username="root";
	$password="";
	$dbname="formdb";

	$conn=mysql_connect($servername,$username,$password,$dbname);

	if(!$conn){
		die("connection failed: ".mysql_connect_error());
	}

	$sql="INSERT INTO inquiry_table (name,email,message) VALUES ('$name','$email','$message')";
	(mysqli_query($conn,$sql));
	mysql_close($conn);

	?>

	<!-- creating a form -->
	<h2><u>PHP form with validation</u></h2>
	<p><span class="errorColor">* mandatory fields</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
		Name:<input type="text" name="name">
		<span class="errorColor">* <?php echo $nameError; ?></span><br><br>

		Email:<input type="text" name="email">
		<span class="errorColor">* <?php echo $emailError; ?></span><br><br>

		Message:<textarea name="message" rows="6" cols="24"></textarea>
		<br><br>

		<input type="hidden" name="submitted" value="Message sent successfuly">
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	if($nameError=="Name is mandatory"){
		echo "Error";
	}else{
		echo $submitted;
	}
	?>

</body>
</html>