<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//To Handle Session Variables on This Page
session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("..\database\connection\db.php");

//If user Actually clicked login button 
if(isset($_POST)) {

	//Escape Special Characters in String
	$username = mysqli_real_escape_string($conn, $_POST['name']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Encrypt Password
	// $password = base64_encode(strrev(md5($password)));

	//sql query to check user login
	$sql = "SELECT * FROM admin WHERE admin_name='$username' AND admin_pass='$password'";
	$result = $conn->query($sql);

	//if user table has this this login details
	if($result->num_rows > 0) {
		//output data
		while($row = $result->fetch_assoc()) {
			
			//Set some session variables for easy reference
			$_SESSION['admin_id'] = $row['admin_id'];
			header("Location:../dashboard.php");
			exit();
		}
 	} else {
 		$_SESSION['loginError'] = true;
 		header("Location: ../index.php");
		exit();
 	}

 	$conn->close();

} else {
	header("Location: index.php");
	exit();
}