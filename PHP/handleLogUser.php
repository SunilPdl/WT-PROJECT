<?php

if(isset($_POST['login'])){

require_once "../SQL/connection.php";

// starting the session
session_start();

	// Details of the users
	$User = $_POST['Uname'];
	$Pass = $_POST['pass'];

		$_SESSION['Uname'] = $User;

	// see if the user name and password is present in the db
	$sql = "SELECT * FROM users WHERE userName = '$User' && password = '$Pass'";

		$query = mysqli_query($connect, $sql);

	if(mysqli_num_rows($query)){
		include_once "./explore.php";
	}
	else{
		header("Location: ../HTML/index.html?error=wrongpasswordorusername");
	}	
}
else{
	echo "hi";
}
